<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class OpenCollectionFilter extends Controller
	{
		/**
		 * Handle the incoming request.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function __invoke(Request $request)
		{
			$opened_collections = DB::table('collections')
			                        ->join(
				                        'contributors',
				                        'contributors.collection_id',
				                        '=',
				                        'collections.id')
			                        ->select(
				                        'collections.title',
				                        'collections.description',
				                        'collections.id',
				                        'collections.target_amount',
				                        'collections.link',
				                        DB::raw('SUM(amount) as current_amount'),
				                        DB::raw('collections.target_amount - SUM(amount) as residual_target')
			                        )
			                        ->groupBy(
				                        'contributors.collection_id',
				                        'collections.id',
				                        'collections.title',
				                        'collections.description',
				                        'collections.target_amount',
				                        'collections.link',
			                        )
			                        ->having('residual_target','>', 0)
			                        ->get();

			return view('collection.filter',
				['title' => 'Opened collections', 'data' => $opened_collections]);
		}
	}
