<!-- resources/views/components/Breadcrumb.blade.php -->
@props(['items'])

<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
    @foreach ($items as $index => $item)
    <li>
      <div class="flex items-center">
        @if ($index > 0)
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
        </svg>
        @endif
        @if(isset($item['url']))
        <a href="{{ $item['url'] }}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">{{ $item['label'] }}</a>
        @else
        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $item['label'] }}</span>
        @endif
      </div>
    </li>
    @endforeach
  </ol>
</nav>