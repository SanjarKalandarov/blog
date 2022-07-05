<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|string',
            'text'=>'required',
            'preview_image'=>'required',
            'main_image'=>'required',
            'cat_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id'
        ];}
        /* $posts->title=$request->title;
        $posts->img=$request->img;
        $posts->text=$request->text;
        $posts->cat_id=$request->cat_id;*/
        public function messages(){
            return [

                'title.string'=>'Sarlavha Satr tipida bo\'lishi kerak',
                'title.required'=>'Ushbu maydon to\'ldrilishi  kerak',
                'text.string'=>'Sarlavha Satr tipida bo\'lishi kerak',
                'text.required'=>'Ushbu maydon to\'ldrilishi  kerak',

                'preview_image.file'=>'Faylni tanlashingiz kerak',
                'preview_image.required'=>'Ushbu maydon to\'ldirlishi kerak',
                'main_image.file'=>'Faylni tanlashingiz kerak',
                'main_image.required'=>'Ushbu maydon to\'ldirlishi kerak',

                'cat_id.required'=>' Ushbu maydon bo\'sh bolmasligi keral',
                'cat_id.integer'=>'Id butun son bo\'lishi kerak',
                'cat_id.exists' =>'kategoriya identifikatori ma\'lumotlar bazasidagi raqam bo\'lishi kerak',
                'tag_ids[].array'=>'malumotlarni massiv korinishida yuboring'

            ];
    }

}
