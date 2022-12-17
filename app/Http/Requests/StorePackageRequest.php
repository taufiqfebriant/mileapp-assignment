<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageRequest extends FormRequest
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
			"transaction_id" => 'required|string',
			"customer_name" => 'required|string',
			"customer_code" => 'required|string|numeric',
			"transaction_amount" => 'required|string|numeric',
			"transaction_discount" => 'required|string|numeric',
			"transaction_additional_field" => 'nullable|string',
			"transaction_payment_type" => 'required|string|integer',
			"transaction_state" => 'required|string',
			"transaction_code" => 'required|string',
			"transaction_order" => 'required|integer',
			"location_id" => 'required|string',
			"organization_id" => 'required|integer',
			"created_at" => 'required|string',
			"updated_at" => 'required|string',
			"transaction_payment_type_name" => 'required|string',
			"transaction_cash_amount" => 'required|integer',
			"transaction_cash_change" => 'required|integer',
			"customer_attribute" => 'required',
			"connote" => 'required',
			"connote_id" => 'required|string',
			"origin_data" => 'required',
			"destination_data" => 'required',
			"koli_data" => 'required',
			"custom_field" => 'required',
			"currentLocation" => 'required'
		];
	}
}
