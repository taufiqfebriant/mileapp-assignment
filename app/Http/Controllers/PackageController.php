<?php

namespace App\Http\Controllers;

use App\Models\Package;
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
				'data' => $packages->toArray()
			]);
		} catch (Throwable $e) {
			$message = 'Failed to get packages.';

			Log::error($message, ['message' => $e->getMessage()]);

			return response()->json([
				'message' => $message,
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function store(Request $request)
	{
		try {
			$package = Package::create($request->all());
			return response()->json([
				'message' => 'Package successfully created.',
				'data' => $package->toArray(),
			], Response::HTTP_CREATED);
		} catch (Throwable $e) {
			$message = 'Failed to create package.';

			Log::error($message, ['message' => $e->getMessage()]);

			return response()->json([
				'message' => $message,
			], Response::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Package  $package
	 * @return \Illuminate\Http\Response
	 */
	public function show(Package $package)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Package  $package
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Package $package)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Package  $package
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Package $package)
	{
		//
	}
}
