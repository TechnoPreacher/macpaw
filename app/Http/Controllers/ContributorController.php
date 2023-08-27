<?php

	namespace App\Http\Controllers;

	use App\Models\Collection;
	use App\Models\Contributor;
	use Illuminate\Http\RedirectResponse;
	use Illuminate\Http\Request;
	use Illuminate\View\View;

	class ContributorController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(Request $request)
		{

		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			//
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request): RedirectResponse
		{

			$data = $request->validate([
				'collectionId'       => 'required',
				'contributorUser' => 'required',
				'contributorAmount'      => 'required',
			]);

			Contributor::create(
				[
					'username'      => $data['contributorUser'],
					'amount'        => $data['contributorAmount'],
					'collection_id' => $data['collectionId'],
				]
			);

			return redirect()->action(
				[ContributorController::class, 'index'], ['action' => 'success']
			);

		}

		/**
		 * Display the specified resource.
		 *
		 * @param  \App\Models\Contributor  $contributor
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show(Contributor $contributor)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  \App\Models\Contributor  $contributor
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit(Contributor $contributor)
		{
			//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  \App\Models\Contributor  $contributor
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, Contributor $contributor)
		{
			//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  \App\Models\Contributor  $contributor
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy(Contributor $contributor)
		{
			//
		}
	}
