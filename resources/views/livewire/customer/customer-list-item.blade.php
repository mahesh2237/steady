<tr>
    <td class="ps-4">
        <p class="text-xs font-weight-bold mb-0">{{$customer->id}}</p>
    </td>
    <td>
        <div>
            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
        </div>
    </td>
    <td class="text-center">
        <p class="text-xs font-weight-bold mb-0">{{$customer->name}}</p>
    </td>
    <td class="text-center">
        <p class="text-xs font-weight-bold mb-0">{{$customer->email}}</p>
    </td>
    
    <td class="text-center">
        <span class="text-secondary text-xs font-weight-bold">{{$customer->created_at}}</span>
    </td>
    <td class="text-center">
        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
            <i class="fas fa-user-edit text-secondary"></i>
        </a>
        <span wire:click="delete">
            <i class="cursor-pointer fas fa-trash text-secondary"></i>
        </span>
    </td>
</tr>