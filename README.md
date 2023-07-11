<h3>Create Custom Artisan Command In Laravel--</h3>
1)  Create the Command Class using --<br/>
     <b>php artisan make:command CustomCommand</b>
2) Define the Command Signature and Description in **app/Console/Commands/CustomCommand.php**
     <br/>
      protected $signature = 'app:user {id}';
      <br/>
3) Edit the command class in CustomCommand.php
<code>
   public function handle()
    {
        $id = $this->argument('id');
        $user=User::find($id)->first();
        $this->info($user);
    }  
</code>
 
4) Run the command-- <br/>
   php artisan app:user 1
   
   
