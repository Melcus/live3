<flux:table :paginate="$this->users">
    <flux:columns>
        <flux:column>Name</flux:column>
        <flux:column>Email</flux:column>
        <flux:column>Created at</flux:column>
    </flux:columns>

    <flux:rows>
        @foreach ($this->users as $user)
            <flux:row :key="$user->id">
                <flux:cell>{{ $user->name }}</flux:cell>
                <flux:cell>{{ $user->email }}</flux:cell>
                <flux:cell>{{ $user->created_at->toDateTimeString() }}</flux:cell>

                <flux:cell>
                    <flux:button
                        variant="ghost"
                        size="sm"
                        icon="trash"
                        inset="top bottom"
                        wire:click="delete({{ $user->id }})"
                        wire:confirm="Are you sure you want to delete this user?"
                    ></flux:button>
                </flux:cell>
            </flux:row>
        @endforeach
    </flux:rows>
</flux:table>
