<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Package;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class PackageController extends Controller
{
	public function index()
	{
		try {
			$packages = Package::all();

			return response()->json([
				'data' => $packages->map(function ($package) {
					$localCreatedAt = $package->created_at->setTimezone(new DateTimeZone('Asia/Jakarta'));
					$localUpdatedAt = $package->updated_at->setTimezone(new DateTimeZone('Asia/Jakarta'));

					return [
						...$package->toArray(),
						'created_at' => $localCreatedAt->format('Y-m-d\TH:i:sO'),
						'updated_at' => $localUpdatedAt->format('Y-m-d\TH:i:sO')
					];
				})
			]);
		} catch (Throwable $e) {
			$message = 'Failed to get packages.';

			Log::error($message, ['message' => $e->getMessage()]);

			return response()->json([
				'message' => $message,
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function store(StorePackageRequest $request)
	{
		try {
			$data = $request->validated();
			$data['transaction_additional_field'] = $data['transaction_additional_field'] ?? '';
			$data['connote']['connote_booking_code'] = $data['connote']['connote_booking_code'] ?? '';

			$package = Package::create($data);

			$localCreatedAt = $package->created_at->setTimezone(new DateTimeZone('Asia/Jakarta'));
			$localUpdatedAt = $package->updated_at->setTimezone(new DateTimeZone('Asia/Jakarta'));

			return response()->json([
				'data' => [
					...$package->toArray(),
					'created_at' => $localCreatedAt->format('Y-m-d\TH:i:sO'),
					'updated_at' => $localUpdatedAt->format('Y-m-d\TH:i:sO')
				],
			], Response::HTTP_CREATED);
		} catch (Throwable $e) {
			$message = 'Failed to create package.';

			Log::error($message, ['message' => $e->getMessage()]);

			return response()->json([
				'message' => $message,
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function show(Request $request)
	{
		try {
			$package = Package::where('_id', $request->package)->first();
			if (!$package) {
				return response()->json([
					'message' => 'Package not found.'
				], Response::HTTP_NOT_FOUND);
			}

			$localCreatedAt = $package->created_at->setTimezone(new DateTimeZone('Asia/Jakarta'));
			$localUpdatedAt = $package->updated_at->setTimezone(new DateTimeZone('Asia/Jakarta'));

			return response()->json([
				'data' => [
					...$package->toArray(),
					'created_at' => $localCreatedAt->format('Y-m-d\TH:i:sO'),
					'updated_at' => $localUpdatedAt->format('Y-m-d\TH:i:sO')
				]
			]);
		} catch (Throwable $e) {
			$message = 'Failed to get package.';

			Log::error($message, ['message' => $e->getMessage()]);

			return response()->json([
				'message' => $message,
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function update(UpdatePackageRequest $request)
	{
		try {
			$package = Package::where('_id', $request->package)->first();
			$method = $request->getMethod();

			if ($method === 'PATCH') {
				if (!$package) {
					return response()->json([
						'message' => 'Package not found.'
					], Response::HTTP_NOT_FOUND);
				}

				foreach ($request->except('_id') as $key => $value) {
					$package->$key = $value;
				}

				$package->save();

				$localCreatedAt = $package->created_at->setTimezone(new DateTimeZone('Asia/Jakarta'));
				$localUpdatedAt = $package->updated_at->setTimezone(new DateTimeZone('Asia/Jakarta'));

				return response()->json([
					'data' => [
						...$package->toArray(),
						'created_at' => $localCreatedAt->format('Y-m-d\TH:i:sO'),
						'updated_at' => $localUpdatedAt->format('Y-m-d\TH:i:sO')
					]
				]);
			}

			if ($package) {
				$package->delete();
			}

			$newPackage = Package::create([
				...$request->toArray(),
				'_id' => $request->package,
			]);

			return response()->json([
				'data' => $newPackage->toArray()
			]);
		} catch (Throwable $e) {
			$message = 'Failed to update package.';

			Log::error($message, ['message' => $e->getMessage()]);

			return response()->json([
				'message' => $message,
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function destroy(Request $request)
	{
		try {
			$package = Package::where('_id', $request->package)->first();
			if (!$package) {
				return response()->json([
					'message' => 'Package not found.'
				], Response::HTTP_NOT_FOUND);
			}

			$package->delete();

			return response()->json([
				'data' => $package
			]);
		} catch (Throwable $e) {
			$message = 'Failed to delete package.';

			Log::error($message, ['message' => $e->getMessage()]);

			return response()->json([
				'message' => $message,
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}
}
