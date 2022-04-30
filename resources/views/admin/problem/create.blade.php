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
                    <form action="{{ route('problems.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="flex mt-6">
                            <div class="flex-1 mr-4">
                                <label for="name" class="formLabel">Title</label>
                                <input type="text" name="title"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name" value="{{ old('title') ? old('title') : '' }}">
                                @error('title')
                                    <div><span class="error">{{ $message }}</span></div>
                                @enderror
                            </div>
                        </div>



                        <div class="flex mt-6">
                            <div class="flex-1 mr-4">
                                <label for="category_id" class="formLabel">category</label>
                                <select name="category_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="category_id">
                                    <option value="">Select Category</option>

                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @empty
                                    @endforelse
                                </select>

                                @error('category_id')
                                    <div><span class="error">{{ $message }}</span></div>
                                @enderror
                            </div>



                            <div class="flex-1 mr-4">
                                <label for="visibility" class="formLabel">visibility</label>
                                <select name="visibility"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="visibility">
                                    <option value="none">Select Visiblity</option>
                                    <option value="public" {{ old('visibility') == 'public' ? 'selected' : '' }}>Public
                                    </option>
                                    <option value="private" {{ old('visibility') == 'private' ? 'selected' : '' }}>Private
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="flex mt-6 justify-between">
                            <div class="flex-1">
                                <label for="description" class="formLabel">Description</label>
                                <textarea name="description" class="ckEditor" id="description" rows="10"></textarea>
                            </div>
                        </div>




                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="tags" class="formLabel ">Tags
                                    <a href="#test-popup" class="open-popup-link text-teal-600 text-sm ml-5">Add New
                                        Tag</a>
                                </label><br>

                                @foreach ($tags as $tag)
                                    <input type="checkbox" class="tags" name="tags[]"
                                        data-id="{{ $tag->slug }}" id="{{ $tag->slug }}"
                                        value="{{ $tag->id }}">
                                    <label for="{{ $tag->slug }}"
                                        class="mr-2 cursor-pointer">{{ $tag->name }}</label>
                                @endforeach

                            </div>
                        </div>



                        <div class="flex mt-6 justify-between">
                            <div class="flex-1">
                                <label for="thumbnail" class="formLabel">Thumbnails</label>
                                <input type="file" name="thumbnails[]" multiple id="thumbnail"
                                    class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">

                                @error('thumbnail')
                                    <div><span class="error">{{ $message }}</span></div>
                                @enderror
                            </div>
                        </div>

                        <div class="upload_image_preview flex"></div>

                        <div class="mt-6">
                            <input type="submit"
                                class="px-8 py-2 text-base uppercase bg-teal-600 hover:bg-emerald-700 text-white rounded-md transition-all"
                                value="Create" />
                        </div>

                    </form>
                </div>
            </div>
            <!-- End Recent Sales -->
        </div>
        <!-- End General Report -->
    </div>

    <div id="test-popup" class="white-popup mfp-hide">
        <h3>Add New Tag</h3>
        <input type="text" name="new_tag" id="add_tag"
            class="border my-2 border-teal-600 focus:outline-none focus:shadow-none px-2 py-1">
        <button type="button"
            class="border my-2 border-teal-600 bg-teal-600 text-white focus:outline-none focus:shadow-none px-2 py-1"
            id="add_new_tag">Add</button>
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
                            $($.parseHTML('<img class="m-5" style="width:150px">')).attr('src', event.target
                                .result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $('#thumbnail').on('change', function() {
                $('.upload_image_preview').html('');
                imagesPreview(this, 'div.upload_image_preview');
            });


            //ckeditor
            CKEDITOR.replace('description');


            //
            $('#name').on('keyup', function() {
                $(this).next().hide();
            })
            $('#category_id').on('change', function() {
                $(this).next().hide();
            })
            $('#thumbnail').on('click', function() {
                $(this).next().hide();
            })


            //popup
            $('.open-popup-link').magnificPopup({
                type: 'inline',
                midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
                closeOnBgClick: false,
                removalDelay: 300,
                fisedContentPos: false,
                fixedBgPos: true,
                focus: "input[name='new_tag']",
                closeBtnInside: true,
                preloader: false,

            });

            //ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content'),
                }
            })

            //add tag via ajax

            $('#add_new_tag').on('click', function(e) {
                e.preventDefault();

                let name = $('#add_tag').val();
                let formData = {

                }
            })

        });
    </script>
@endsection


@section('style')
    <style>
        .white-popup {
            position: relative;
            background: #FFF;
            padding: 20px;
            width: auto;
            max-width: 500px;
            margin: 20px auto;
        }

    </style>
@endsection
