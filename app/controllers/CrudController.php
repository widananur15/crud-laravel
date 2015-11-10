<?php

class CrudController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tampil=DB::table('tcoba as a')
			->select('a.id','a.nis','a.nama')
			->get();



		return View::make('template.show')
			->with('tampil', $tampil);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nis=Input::get('nis');
		$nama=Input::get('nama');

		$save=new Crud();
		$save->nis=$nis;
		$save->nama=$nama;
		$save->save();

		return Redirect::to('/tampil');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$hapus=Crud::find($id);
		$hapus->delete();

		return Redirect::to('/tampil');
	}


}
