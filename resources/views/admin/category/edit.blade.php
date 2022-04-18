@extends('layouts.dashboard')

@section('content')
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="grid grid-cols-1 gap-6 xl:col-span-1">
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header flex justify-between items-center">
                    <h3 class="h4">Edit Category</h3>
                    <a href="{{ route('category.index') }}" class="btn-shadow">Back</a>
                </div>
            </div>

            <div class="card">

                <div class="card-body">
                        <form action="" method="POST" >
                            @csrf

                            <div class="flex mt-6">
                                <div class="flex-1 mr-4">
                                    <label for="name" class="formLabel">Name</label>
                                    <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $category->name }}">
                                </div>

                                <div class="flex-1 mr-4">
                                    <label for="slug" class="formLabel">Slug</label>
                                    {{-- shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline --}}
                                    <input type="text" readonly name="slug" class="border  focus:outline-none rounded w-full py-2 px-3" value="">
                                </div>
                            </div>



                            <div class="mt-6">
                                <button type="submit"
                                    class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all">Update</button>
                            </div>

                        </form>
                </div>

            </div>
        </div>
    </div>
@endsection
