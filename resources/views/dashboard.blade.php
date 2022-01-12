<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-x1 text-gray-900 leading-tight">
            {{ __(' AIMS Dashboard') }}
        </h1>
    </x-slot>

    <div class="py- m-6">
    <div class="w-full m-2">
      @can('write post')
          <a href="{{ route('posts.create')}}" class="bg-green-400 rounded-lg">
                Create Post
            </a>
            @endcan
            
        </div>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        
  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-100">
        <thead class="bg-gray-10 dark:bg-gray-900 dark:text-gray-200">
          <tr> 
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Title</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Status</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Image</th>
            <th scope="col" class="relative px-1 py-1">Edit</th>

          </tr>
        </thead>

        <tbody class="bg-white dark:bg-gray-600 divide-y divide-gray-200">
          <tr>
          @foreach (App\Models\Post::all() as $post)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $post->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $post->title }}</td>
            <button style="background-color:green"><td class="px-6 py-4 whitespace-nowrap">Active</td></button>
            <td class="px-6 py-4 whitespace-nowrap">
              <img class="w-8 h-8 rounded-full" src="https://picsum.photos/200" />
            </td>
            <td class="px-6 py-4 text-right text-sm">
            @can('edit post')
              
            <a href="{{ route('posts.edit', $post->id)}}" class="m-4 p-4 bg-green-400 rounded">Edit</a>
           
        @endcan
            @can('publish post')
            
                <a href="#" class="m-4 p-4 bg-green-400 rounded">Publish</a>
               
            @endcan
            </td>
          </tr>
          @endforeach
          <!-- More items... -->
        </tbody>
      </table>
      <div class="m-2 p-2">Pagination</div>
    </div>
  </div>
</div>
    </div>
</x-app-layout>
