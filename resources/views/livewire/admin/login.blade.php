<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card w-96 h-fit bg-white text-black mx-auto top-52">
        <div class="card-body">
          <h2 class="card-title">Login</h2>

          <div class="form-control w-full max-w-xs">
            <label class="label">
              <span class="font-semibold">Username</span>
            </label>
            <input type="text" placeholder="" class="input input-bordered w-full max-w-xs text-white" />
          </div>

          <div class="form-control w-full max-w-xs">
            <label class="label">
              <span class="font-semibold">Password</span>
            </label>
            <input type="password" placeholder="" class="input input-bordered w-full max-w-xs text-white" />
          </div>

          <div class="card-actions justify-end align-bottom">
            <button class="btn text-white" wire:click="login()">Login</button>
          </div>
        </div>
      </div>
</div>
