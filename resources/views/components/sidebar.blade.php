<div :class="open ? 'w-64' : 'w-16'"
    class="fixed top-0 left-0 h-screen bg-white text-black shadow-lg border-r border-gray-200">

    <!-- Logo & Toggle -->
    <div class="w-full flex items-center justify-between p-4">
        <div class="flex items-center gap-2">
            <i class="fas fa-wallet text-xl"></i>
            <span x-show="open"
                class="text-xl font-bold whitespace-nowrap transition-all duration-300">KeuanganApp</span>
        </div>
        <button @click="open = !open" class="text-gray-600 hover:text-gray-900">
            <i class="fas" :class="open ? 'fa-chevron-left' : 'fa-chevron-right'"></i>
        </button>
    </div>


    <!-- Nav Links -->
    <nav class="w-full mt-6 space-y-2 px-2">
        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-2 px-3 py-2 rounded transition-all {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : '' }}">
            <i class="fas fa-home"></i>
            <span x-show="open" class="whitespace-nowrap">Dashboard</span>
        </a>
        <a href="{{ route('transaksi.index') }}"
            class="flex items-center gap-2 px-3 py-2 rounded transition-all {{ request()->routeIs('transaksi.*') ? 'bg-blue-600 text-white' : '' }}">
            <i class="fas fa-money-bill-wave"></i>
            <span x-show="open" class="whitespace-nowrap">Transaksi</span>
        </a>
        <a href="{{ route('profile.edit') }}"
            class="flex items-center gap-2 px-3 py-2 rounded transition-all {{ request()->routeIs('profile.edit') ? 'bg-blue-600 text-white' : '' }}">
            <i class="fas fa-user"></i>
            <span x-show="open" class="whitespace-nowrap">Profil</span>
        </a>
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit" class="flex items-center gap-2 px-3 py-2 rounded text-red-700 w-full">
                <i class="fas fa-sign-out-alt"></i>
                <span x-show="open" class="whitespace-nowrap">Logout</span>
            </button>
        </form>
    </nav>
</div>
