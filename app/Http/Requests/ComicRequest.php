<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'thumb' => 'required',
            'price' => 'required|min:3|max:20',
            'series' => 'required|min:3|max:100',
            'sale_date' => 'required|date|max:50',
            'type' => 'required|min:3|max:50',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio.',
            'title.min' => 'Il titolo deve avere almeno :min caratteri.',
            'title.max' => 'Il titolo non può superare :max caratteri.',
            'thumb.required' => 'Immagine di copertina obbligatoria.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.min' => 'Il prezzo deve essere lungo almeno :min caratteri.',
            'price.max' => 'Il prezzo non può superare :max caratteri.',
            'series.required' => 'La serie è obbligatoria.',
            'series.min' => 'Il nome della serie deve avere almeno :min caratteri.',
            'series.max' => 'Il nome della serie non può superare :max caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'Inserisci una data valida.',
            'sale_date.max' => 'La data di vendita non può superare :max caratteri.',
            'type.required' => 'Il tipo di fumetto è obbligatorio.',
            'type.min' => 'Il tipo di fumetto deve avere almeno :min caratteri.',
            'type.max' => 'Il tipo di fumetto non può superare :max caratteri.',
        ];
    }
}
