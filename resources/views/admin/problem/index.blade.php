@extends('layouts.dashboard')

@section('content')
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="grid grid-cols-1 gap-6 xl:col-span-1">
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header font-bold flex justify-between items-center">
                    <h2>View All Problems</h2>
                    <a href="{{ route('problems.create') }}" class="btn-shadow">Create Problem</a>
                </div>

                <table class="table-auto w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-r"></th>
                            <th class="px-4 py-2 border-r">Title</th>
                            <th class="px-4 py-2">Category</th>
                            <th class="px-4 py-2">Tag </th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">

                        @forelse ($problems as  $problem)
                            <tr>
                                <td style="color: {{ $problem->visibility == 'public' ? 'green' : 'red' }}"
                                    class="border border-l-0 border-b-0 px-4 py-2 text-center "><i
                                        class="fad fa-{{ $problem->visibility == 'public' ? 'eye' : 'eye-slash' }}"></i>
                                </td>
                                <td class="border border-l-0 border-b-0 px-4 py-2"><a
                                        href="{{ route('problems.show', $problem) }}"
                                        class="hover:text-teal-600">{{ \Illuminate\Support\Str::limit($problem->title, 40, '...') }}</a>
                                </td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2">
                                    {{ $problem->category->name }} </td>
                                <td class="border border-l-0 border-b-0 border-r-0  px-4 py-2">
                                    <div class="tags grid grid-cols-2 gap-3">

                                        @foreach ($problem->tags as $tag)
                                            <a style="color: #fff;"
                                                class="bg-teal-600 text-white text-xs rounded-sm px-2 py-1  "
                                                href="">{{ $tag->name }}
                                            </a>
                                        @endforeach


                                    </div>
                                </td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2 flex text-xs">
                                    <a href="" class="btn-bs-success mx-2"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn-bs-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i
                                        class="fad fa-circle"></i></td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2 text-red-600" colspan="5">No
                                    Problem Found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

                {{ $problems->links() }}
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
