<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center bg-red-500 border border-yellow-500 px-1 py-2 w-96 text-white rounded']) }}>
    {{ $slot }}
</button>
