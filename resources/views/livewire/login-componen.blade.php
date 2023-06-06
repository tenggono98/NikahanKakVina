<div>

    <div class="flex align-middle justify-center mt-40">
        <div class="card w-96 bg-base-100 shadow-xl">

            <div class="card-body items-center text-center">
                <p class="card-title">Login</p>

                <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Username</span>

                    </label>
                    <input type="text" wire:model="username" placeholder="John Doe" class="input input-bordered w-full max-w-xs" />
                    <label class="label">

                    </label>
                  </div>


                <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Password</span>

                    </label>
                    <input type="password" wire:model="password" placeholder="********" class="input input-bordered w-full max-w-xs" />
                    <label class="label">

                    </label>
                  </div>


              <div class="card-actions">
                <button class="btn btn-primary" wire:click="submit">Login</button>
              </div>

              @if ($errors->any())
              <div class="">
                  <ul>
                      @foreach ($errors->all() as $error)
                      <div class="alert alert-error mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>{{ $error }}</span>
                      </div>
                      @endforeach
                  </ul>
              </div>
          @endif


            </div>
          </div>
    </div>

</div>
