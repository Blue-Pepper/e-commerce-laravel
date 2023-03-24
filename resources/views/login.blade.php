<x-master>
    <div class="container">
    <div class="row m-5">
             <div class="col-sm-3"></div>
            <div class="col-sm-6 bg-light border rounded">
                <form class="p-5">
                    <p class="h2 text-center pb-2">Login</p>
                    <x-form.container>
                        <x-form.input name="email"/>
                    </x-form.container>
                    <x-form.container>
                        <x-form.input name="password"/>
                    </x-form.container>
                    <x-form.submit-button name="login">Submit</x-form.submit-button>
                </form>
            </div>
    </div>
</div>
</x-master>
