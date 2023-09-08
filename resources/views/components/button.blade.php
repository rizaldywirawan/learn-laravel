<button {{ $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2']) }}>
    {{ $slot }}
</button>
