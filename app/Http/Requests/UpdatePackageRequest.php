<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
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
			"transaction_id" => 'string',
			"customer_name" => 'string',
			"customer_code" => 'string|numeric',
			"transaction_amount" => 'string|numeric',
			"transaction_discount" => 'string|numeric',
			"transaction_additional_field" => 'nullable|string',
			"transaction_payment_type" => 'string|integer',
			"transaction_state" => 'string',
			"transaction_code" => 'string',
			"transaction_order" => 'integer',
			"location_id" => 'string',
			"organization_id" => 'integer',
			"created_at" => 'string',
			"updated_at" => 'string',
			"transaction_payment_type_name" => 'string',
			"transaction_cash_amount" => 'numeric',
			"transaction_cash_change" => 'numeric',
			"customer_attribute.Nama_Sales" => 'string',
			"customer_attribute.TOP" => 'string',
			"customer_attribute.Jenis_Pelanggan" => 'string',
			"connote.connote_id" => "string",
			"connote.connote_number" => "integer",
			"connote.connote_service" => "string",
			"connote.connote_service_price" => "numeric",
			"connote.connote_amount" => "numeric",
			"connote.connote_code" => "string",
			"connote.connote_booking_code" => "nullable|string",
			"connote.connote_order" => "integer",
			"connote.connote_state" => "string",
			"connote.connote_state_id" => "integer",
			"connote.zone_code_from" => "string",
			"connote.zone_code_to" => "string",
			"connote.surcharge_amount" => "nullable|numeric",
			"connote.transaction_id" => "string|same:transaction_id",
			"connote.actual_weight" => "numeric",
			"connote.volume_weight" => "numeric",
			"connote.chargeable_weight" => "numeric",
			"connote.created_at" => "string",
			"connote.updated_at" => "string",
			"connote.organization_id" => "integer",
			"connote.location_id" => "string",
			"connote.connote_total_package" => "string|numeric",
			"connote.connote_surcharge_amount" => "string|numeric",
			"connote.connote_sla_day" => "string|numeric",
			"connote.location_name" => "string",
			"connote.location_type" => "string",
			"connote.source_tariff_db" => "string",
			"connote.id_source_tariff" => "string|numeric",
			"connote.pod" => "nullable",
			"connote.history" => "nullable|array",
			"connote_id" => 'string|same:connote.connote_id',
			"origin_data.customer_name" => "string",
			"origin_data.customer_address" => "string",
			"origin_data.customer_email" => "string|email",
			"origin_data.customer_phone" => "string",
			"origin_data.customer_address_detail" => "nullable|string",
			"origin_data.customer_zip_code" => "string|numeric",
			"origin_data.zone_code" => "string",
			"origin_data.organization_id" => "integer",
			"origin_data.location_id" => "string",
			"destination_data.customer_name" => "string",
			"destination_data.customer_address" => "string",
			"destination_data.customer_email" => "nullable|email",
			"destination_data.customer_phone" => "string|numeric",
			"destination_data.customer_address_detail" => "string",
			"destination_data.customer_zip_code" => "string|numeric",
			"destination_data.zone_code" => "string",
			"destination_data.organization_id" => "integer",
			"destination_data.location_id" => "string",
			"koli_data.*.koli_length" => "integer",
			"koli_data.*.awb_url" => "string|url",
			"koli_data.*.created_at" => "string|date_format:Y-m-d H:i:s",
			"koli_data.*.koli_chargeable_weight" => "numeric",
			"koli_data.*.koli_width" => "numeric",
			"koli_data.*.koli_surcharge" => "nullable|array",
			"koli_data.*.koli_height" => "numeric",
			"koli_data.*.updated_at" => "string|date_format:Y-m-d H:i:s",
			"koli_data.*.koli_description" => "string",
			"koli_data.*.koli_formula_id" => "nullable|integer",
			"koli_data.*.connote_id" => "string",
			"koli_data.*.koli_volume" => "numeric",
			"koli_data.*.koli_weight" => "numeric",
			"koli_data.*.koli_id" => "string",
			"koli_data.*.koli_custom_field.awb_sicepat" => "nullable",
			"koli_data.*.koli_custom_field.harga_barang" => "nullable",
			"koli_data.*.koli_code" => "string",
			"custom_field.catatan_tambahan" => 'nullable|string',
			"currentLocation.name" => 'string',
			"currentLocation.code" => 'string',
			"currentLocation.type" => 'string'
		];
	}
}
