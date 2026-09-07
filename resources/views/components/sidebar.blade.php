<aside class="w-64 bg-slate-900 text-white h-screen flex flex-col p-4">
    <div class="mb-8">
        <h1 class="text-xl font-bold">
            TecAsset
        </h1>

        <p class="text-xs text-slate-400">
            Tecnologia sob controle
        </p>
    </div>

    <nav class="flex flex-col gap-1">
        <a href="{{ route('status')  }}" class="px-3 py-2 rounded {{ request()->routeIs('status') ? 'bg-blue-600' : 'hover:bg-slate-800' }}">
            Dashboard
        </a>
        <a href="#" class="px-3 py-2 rounded hover:bg-slate-800">Ativos</a>
        <a href="#" class="px-3 py-2 rounded hover:bg-slate-800">Termos de Responsabilidade</a>
        <a href="#" class="px-3 py-2 rounded hover:bg-slate-800">Usuários</a>
    </nav>
</aside>
