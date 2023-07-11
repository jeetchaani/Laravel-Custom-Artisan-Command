<h3>Create Custom Artisan Command In Laravel--</h3>
1)  Create the Command Class using --
     <code>
         php artisan make:command CustomCommand
     </code>
     <br/>
2) Define the Command Signature and Description in **app/Console/Commands/CustomCommand.php**
        <code>
                  protected $signature = 'app:user {id}';
        </code>
      <br/>  
3) Edit the command class in CustomCommand.php
<code>
   public function handle()
    {
      //put your command logic here
        $id = $this->argument('id');
        $user=User::find($id)->first();
        $this->info($user);
    }  
</code>
<br/>
4) Run the command-- 
<code>
   php artisan app:user 1
</code>
   
   
