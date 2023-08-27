<?php

	namespace App\Http\Controllers;

	use App\Models\Collection;
	use App\Models\Contributor;
	use Illuminate\Http\RedirectResponse;
	use Illuminate\Http\Request;
	use Illuminate\View\View;

	class CollectionController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index(Request $request)
		{


			$action = isset($request->action) ? $request->action : '';

			switch ($action) {
				case "new":
				case "success":
				case "retrive":
					return view('collection.'.$action);
				case "index":
					return view('collection.'.$action, ['data' => Collection::all()]);
			}


			$collectionId = isset($request->collectionId) ? $request->collectionId : '';

			return redirect()->action(
				[CollectionController::class, 'show'], ['collection' => $collectionId]
			);
		}


		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{

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
				'collectionTitle'       => 'required',
				'collectionDescription' => 'required',
				'collectionAmount'      => 'required',
				'collectionUrl'         => 'required',
			]);

			$title         = $data['collectionTitle'];
			$description   = $data['collectionDescription'];
			$target_amount = $data['collectionAmount'];
			$link          = $data['collectionUrl'];

			Collection::create(
				[
					'title'         => $title,
					'description'   => $description,
					'target_amount' => $target_amount,
					'link'          => $link,
				]
			);

			return redirect()->action(
				[CollectionController::class, 'index'], ['action' => 'success']
			);

		}


		/**
		 * Display the specified resource.
		 *
		 * @param  \App\Models\Collection  $collection
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show(Collection $collection): View
		{
			$contributions = Contributor::where('collection_id', $collection->id)->get();
			return view('collection.show', ['collection' => $collection, 'contributions' => $contributions]);
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  \App\Models\Collection  $collection
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit(Collection $collection)
		{
			//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  \App\Models\Collection  $collection
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, Collection $collection)
		{
			//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  \App\Models\Collection  $collection
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy(Collection $collection)
		{
			//
		}

		/**
		 * custom method for filtering
		 *
		 */


	}
