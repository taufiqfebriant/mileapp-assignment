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
			"transaction_cash_amount" => 'required|numeric',
			"transaction_cash_change" => 'required|numeric',
			"customer_attribute.Nama_Sales" => 'required|string',
			"customer_attribute.TOP" => 'required|string',
			"customer_attribute.Jenis_Pelanggan" => 'required|string',
			"connote.connote_id" => "required|string",
			"connote.connote_number" => "required|integer",
			"connote.connote_service" => "required|string",
			"connote.connote_service_price" => "required|numeric",
			"connote.connote_amount" => "required|numeric",
			"connote.connote_code" => "required|string",
			"connote.connote_booking_code" => "nullable|string",
			"connote.connote_order" => "required|integer",
			"connote.connote_state" => "required|string",
			"connote.connote_state_id" => "required|integer",
			"connote.zone_code_from" => "required|string",
			"connote.zone_code_to" => "required|string",
			"connote.surcharge_amount" => "nullable|numeric",
			"connote.transaction_id" => "required|string|same:transaction_id",
			"connote.actual_weight" => "required|numeric",
			"connote.volume_weight" => "required|numeric",
			"connote.chargeable_weight" => "required|numeric",
			"connote.created_at" => "required|string",
			"connote.updated_at" => "required|string",
			"connote.organization_id" => "required|integer",
			"connote.location_id" => "required|string",
			"connote.connote_total_package" => "required|string|numeric",
			"connote.connote_surcharge_amount" => "required|string|numeric",
			"connote.connote_sla_day" => "required|string|numeric",
			"connote.location_name" => "required|string",
			"connote.location_type" => "required|string",
			"connote.source_tariff_db" => "required|string",
			"connote.id_source_tariff" => "required|string|numeric",
			"connote.pod" => "nullable",
			"connote.history" => "nullable|array",
			"connote_id" => 'required|string|same:connote.connote_id',
			"origin_data" => 'required',
			"destination_data" => 'required',
			"koli_data" => 'required',
			"custom_field" => 'required',
			"currentLocation" => 'required'
		];
	}
}
