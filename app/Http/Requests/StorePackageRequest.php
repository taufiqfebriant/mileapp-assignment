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
			"origin_data.customer_name" => "required|string",
			"origin_data.customer_address" => "required|string",
			"origin_data.customer_email" => "required|string|email",
			"origin_data.customer_phone" => "required|string",
			"origin_data.customer_address_detail" => "nullable|string",
			"origin_data.customer_zip_code" => "required|string|numeric",
			"origin_data.zone_code" => "required|string",
			"origin_data.organization_id" => "required|integer",
			"origin_data.location_id" => "required|string",
			"destination_data.customer_name" => "required|string",
			"destination_data.customer_address" => "required|string",
			"destination_data.customer_email" => "nullable|email",
			"destination_data.customer_phone" => "required|string|numeric",
			"destination_data.customer_address_detail" => "required|string",
			"destination_data.customer_zip_code" => "required|string|numeric",
			"destination_data.zone_code" => "required|string",
			"destination_data.organization_id" => "required|integer",
			"destination_data.location_id" => "required|string",
			"koli_data.*.koli_length" => "required|integer",
			"koli_data.*.awb_url" => "required|string|url",
			"koli_data.*.created_at" => "required|string|date_format:Y-m-d H:i:s",
			"koli_data.*.koli_chargeable_weight" => "required|numeric",
			"koli_data.*.koli_width" => "required|numeric",
			"koli_data.*.koli_surcharge" => "nullable|array",
			"koli_data.*.koli_height" => "required|numeric",
			"koli_data.*.updated_at" => "required|string|date_format:Y-m-d H:i:s",
			"koli_data.*.koli_description" => "required|string",
			"koli_data.*.koli_formula_id" => "nullable|integer",
			"koli_data.*.connote_id" => "required|string",
			"koli_data.*.koli_volume" => "required|numeric",
			"koli_data.*.koli_weight" => "required|numeric",
			"koli_data.*.koli_id" => "required|string",
			"koli_data.*.koli_custom_field.awb_sicepat" => "nullable",
			"koli_data.*.koli_custom_field.harga_barang" => "nullable",
			"koli_data.*.koli_code" => "required|string",
			"custom_field.catatan_tambahan" => 'nullable|string',
			"currentLocation.name" => 'required|string',
			"currentLocation.code" => 'required|string',
			"currentLocation.type" => 'required|string'
		];
	}
}
