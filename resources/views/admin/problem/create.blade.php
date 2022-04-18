@extends('layouts.dashboard')

@section('content')


<div class="bg-gray-100 flex-1 p-6 md:mt-16">
    <!-- General Report -->
    <div class="grid gap-6 xl:grid-cols-1">
        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2 class="h4">Create Problem</h2>
                <a href="{{ route('problems.index') }}" class="btn-shadow">Back</a>
            </div>
            <div class="p-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="flex mt-6">
                        <div class="flex-1 mr-4">
                            <label for="name" class="formLabel">Title</label>
                            <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="">


                        </div>
                    </div>

                    <div class="flex mt-6">
                        <div class="flex-1 mr-4">
                            <label for="category_id" class="formLabel">category</label>
                            <select name="category_id"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category_id">
                                <option value="none">Select Category</option>

                            </select>


                        </div>

                        <div class="flex-1 mr-4">
                            <label for="visibility" class="formLabel">visibility</label>
                            <select name="visibility" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="visibility" >
                                <option value="">Select Visiblity</option>
                                <option value="public">Public</option>
                                <option value="private">Private</option>
                            </select>

                        </div>
                    </div>

                    <div class="flex mt-6 justify-between">
                        <div class="flex-1">
                            <label for="description" class="formLabel">Description</label>

                            <textarea name="ckEditor" class="ckEditor" id="description"  rows="10"></textarea>

                        </div>
                    </div>

                    <div class="mt-6 flex">
                        <div class="flex-1">
                            <label for="tags" class="formLabel">Tags</label>




                        </div>
                    </div>

                    <div class="flex mt-6 justify-between">
                        <div class="flex-1">
                            <label for="thumbnail" class="formLabel">Thumbnails</label>
                            <input type="file" name="thumbnail[]" multiple id="thumbnail" class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">

                        </div>
                    </div>

                    <div class="upload_image_preview flex"></div>

                    <div class="mt-6">
                        <button type="submit" class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all">Create</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Recent Sales -->
    </div>
    <!-- End General Report -->
</div>
@endsection

@section('scripts')
    <script>



        $(function() {

            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="m-5" style="width:150px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $('#thumbnail').on('change', function() {
                imagesPreview(this, 'div.upload_image_preview');
            });


            CKEDITOR.replace( 'ckEditor' );
        });
    </script>
@endsection