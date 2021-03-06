@extends('layouts.dashboard')

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    @if ($errors->any())
        <div role="alert" class="mb-5">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                ALert!!!
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 gap-6 xl:col-span-1">
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h3 class="h4">Add Tag</h3>
                <a href="{{ route('tags.index') }}" class="btn-shadow">Back</a>
            </div>
        </div>

        <div class="card">

            <div class="card-body">

                <form action="{{ route('tags.store') }}" method="POST">
                    @csrf

                    <div class="flex mt-6">
                        <div class="flex-1 mr-4">
                            <label for="name" class="formLabel">Name</label>
                            <input type="text" name="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="cat_name" >
                            <small id="name" class="form-text text-muted">Numeric value not allowed</small>

                        </div>

                        <div class="flex-1 mr-4">
                            <label for="slug" class="formLabel">Slug</label>
                            <input type="text" readonly name="slug"
                                class="border bg-gray-300 focus:outline-none rounded w-full py-2 px-3" id="cat_slug"
                                >
                        </div>
                    </div>



                    <div class="mt-6">
                        <button type="submit"
                            class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all">Add</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $("#cat_name").keyup(function() {
            let cat_value = $(this).val();
            let slug  = cat_value.replaceAll(' ', '-');

            $('#cat_slug').val(slug);
        });
    </script>
@endsection
