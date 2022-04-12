@extends('layouts.dashboard')

@section('content')

<div class="bg-gray-100 flex-1 p-6 md:mt-16">
    <div class="grid grid-cols-1 gap-6 xl:col-span-1">
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header font-bold">View All Problems</div>

            <table class="table-auto w-full text-left">
              <thead>
                <tr>
                  <th class="px-4 py-2 border-r"></th>
                  <th class="px-4 py-2 border-r">Title</th>
                  <th class="px-4 py-2 border-r">Visibility</th>
                  <th class="px-4 py-2">Category</th>
                  <th class="px-4 py-2">Tag </th>
                  <th class="px-4 py-2">Action</th>
                </tr>
              </thead>
              <tbody class="text-gray-600">

                @forelse ($problems as  $problem)
                  <tr>
                    <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 border-b-0 px-4 py-2"><a href="{{ route('problems.show', $problem->slug) }}" class="hover:text-teal-600">{{ \Illuminate\Support\Str::limit($problem->title, 40, '...') }}</a></td>
                    <td class="border border-l-0 border-b-0 px-4 py-2">{{ $problem->visibility }}</td>
                    <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2"> {{ $problem->category_id }} </td>
                    <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2"></td>
                    <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2 flex text-xs">
                        <a href=""  class="btn-bs-primary "><i class="fas fa-eye"></i></a>
                        <a href=""  class="btn-bs-success mx-2"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn-bs-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                  @empty
                    <tr>
                        <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                        <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2 text-red-600" colspan="5">No Problem Found</td>
                    </tr>
                @endforelse

              </tbody>
            </table>
          </div>
    </div>

</div>

@endsection
