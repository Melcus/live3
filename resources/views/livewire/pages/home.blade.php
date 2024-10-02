<div>
    <flux:heading size="xl" level="1">Home page</flux:heading>

    <flux:subheading size="lg" class="mb-6">This is where...</flux:subheading>

    <flux:separator variant="subtle" />

    <form class="mt-6 space-y-2 max-w-md" wire:submit="save">
        <flux:input wire:model="userCreateForm.name" label="Name" description="This will be publicly displayed." />
        <flux:input type="email" wire:model="userCreateForm.email" label="Email"/>
        <flux:input class="" type="password" wire:model="userCreateForm.password" label="Password" />
        <flux:input type="password" wire:model="userCreateForm.password_confirmation" label="Password confirmation" />

        <flux:button type="submit">Store</flux:button>
    </form>

    <flux:separator variant="subtle" class="my-6" />

    <livewire:components.user-list/>
</div>
