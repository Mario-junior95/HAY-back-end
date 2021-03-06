<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'description_ar' => 'required',
            'description_en' => 'required',
            // 'image' => 'bail|nullable|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'date' => 'required|date',            
        ];
    }

    /**
     * Get the message if one of the validation rules is not appliable to the request.
     *
     * @return array
     */
    public function messages()
    {
        return 
        [
            'title_ar.required' => 'Arabic Title is required !',
            'title_ar.max' => 'Title must be maximum of 255 characters !',

            'title_en.required' => 'English Title is required !',
            'title_en.max' => 'Title must be maximum of 255 characters !',

            'description_ar.required' => 'Arabic Description is required !',
            'description_en.required' => 'English Description is required !',

            // 'image.mimes' => 'Image must be .jpg , .jpeg, .gif, .svg or .png extension !',
            // 'image.max' => 'Image to upload  must be maximum of 5MB !',
            
            'date.required' => 'Date is required !',
        ];            
    }
}
