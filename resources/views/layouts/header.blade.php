<header class="flex h-14 items-center gap-4 border-b bg-muted/40 px-4 lg:h-[60px] lg:px-6">
    <button id="toggle-sidebar" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-9 w-9 shrink-0 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu">
            <line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/>
        </svg>
    </button>
    <!-- sheet goes here -->
     <x-dashboard.sheet />
    <!-- dropdown goes here -->

    @push('scripts')
    <script>
        const sidebar = document.getElementById('sidebar-content');
        document.getElementById('toggle-sidebar').addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });

        document.getElementById('close-sidebar').addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        })
    </script>
    @endpush
</header>