<h3>Create Custom Artisan Command In Laravel--</h3>
1)  Create the Command Class using --<br/>
     <code>
         php artisan make:command CustomCommand
     </code>
     <br/>
2) Define the Command Signature and Description in **app/Console/Commands/CustomCommand.php**
     <br/>
        <code>
                  protected $signature = 'app:user {id}';
        </code>
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
<code>
   php artisan app:user 1
</code>
   
   
