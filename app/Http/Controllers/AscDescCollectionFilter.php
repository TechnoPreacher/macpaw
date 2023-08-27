<?php

	namespace App\Http\Controllers;

	use App\Models\Collection;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use Illuminate\View\View;

	class AscDescCollectionFilter extends Controller
	{
		/**
		 * Handle the incoming request.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function __invoke(Request $request): View
		{

			$filter_order = $request->order;

			$filtered_collections =
				DB::table('contributors')->
				select(
					'collections.id',
					'collections.title',
					'collections.description',
					'collections.target_amount',
					'collections.link',
					DB::raw('SUM(amount) as current_amount'),
					DB::raw('collections.target_amount - SUM(amount) as residual_target')
				)
				  ->join(
					  'collections', 'collections.id',
					  '=',
					  'contributors.collection_id')
				  ->groupBy('contributors.collection_id',
					  'collections.id',
					  'collections.title',
					  'collections.description',
					  'collections.target_amount',
					  'collections.link')
				  ->orderBy('residual_target', $filter_order)
				  ->get();

			return view('collection.filter',
				['title' => mb_strtoupper($filter_order).' sorted collections', 'data' => $filtered_collections]);
		}
	}
