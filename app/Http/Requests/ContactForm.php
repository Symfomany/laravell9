<?php

namespace App\Http\Requests;


/**
 * Formulaire de Contact
 */
class ContactForm extends Request
{

      /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'message' => 'required|min:20|max:255',
        ];
    }

    /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
      return true;
  }

}













 ?>
