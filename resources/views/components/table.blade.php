<!-- resources/views/components/table.blade.php -->
<div class="bg-white shadow sm:rounded-lg overflow-auto">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        @for ($i = 0; $i < $numColumns; $i++)
          <th scope="col" class="px-6 py-3 text-left text-sm font-bold text-gray-500 uppercase tracking-wider">
            {{ $headers[$i] }}
          </th>
        @endfor
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      {{ $slot }}
    </tbody>
  </table>
</div>
