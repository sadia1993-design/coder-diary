@extends('layouts.dashboard')

@section('content')
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="grid grid-cols-1 gap-6 xl:col-span-1">
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header font-bold flex justify-between items-center">
                    <h2>View All Category</h2>
                    <a href="{{ route('category.create') }}" class="btn-shadow">Create Category</a>
                </div>

                <table class="table-auto w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-r"></th>
                            <th class="px-4 py-2 border-r">Name</th>
                            <th class="px-4 py-2">Slug</th>
                            <th class="px-4 py-2">Problem</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">

                        @forelse ($categories as  $category)
                            <tr>
                                <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i
                                        class="fad fa-circle"></i></td>
                                <td class="border border-l-0 border-b-0 px-4 py-2">{{ $category->name }}</td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2 lowercase">
                                    {{ $category->slug }} </td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2"> </td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2  text-xs">
                                    <form class="flex" action="{{ route('category.destroy', $category->id) }}"
                                        method="POST">
                                        <a href="{{ route('category.edit', $category->id) }}" title="Edit Category"
                                            class="btn-bs-success mx-2"><i class="fas fa-edit"></i></a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Delete Category" class="btn-bs-danger"
                                            onclick="return confirm('Are you sure to Delete?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i
                                        class="fad fa-circle"></i></td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2 text-red-600" colspan="5">No
                                    Category Found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

                <div class="pagination mt-5 mb-5 ml-4 mr-4">
                    {{ $categories->links() }}
                </div>




            </div>


        </div>



    </div>
@endsection

@section('scripts')
    <script>
        @if (Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection
