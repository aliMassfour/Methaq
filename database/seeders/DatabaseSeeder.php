<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('roles')->insert([
        //   'name' => 'admin',
          
        // ]);
        DB::table('users')->insert([
          'role_id' => '1' ,
          'email' => 'ali@example.com',
          'password' => bcrypt(":707#:12d5%%:;;$321")
        ]);
        // DB::table('services')->insert([
        //   'name' => 'استشارات قانونية',
        //   'descreption' => 'يمكنك تقديم خدمة استشارات قانونية عبر الهاتف أو البريد الإلكتروني لعملائك، وتوفير الإجابات القانونية لأسئلتهم المتعلقة بالقوانين واللوائح في المملكة العربية السعودية.',
        //   'image' => ''
        // ]);
        // DB::table('services')->insert([
        //   'name' => 'التحكيم والوساطة',
        //   'descreption' =>'يمكنك تقديم خدمات التحكيم والوساطة لعملائك، حيث يمكنك العمل كوسيط بين الأطراف المتنازعة أو تحكيم النزاعات بينهم.',
        //   'image' => ''
        // ]);
        // DB::table('services')->insert([
        //   'name' => 'الدفاع القانوني',
        //   'descreption' =>'مكنك تقديم خدمات الدفاع القانوني لعملائك في القضايا المدنية والجنائية، وتمثيلهم أمام المحاكم والهيئات القضائية في المملكة العربية السعودية.',
        //   'image' => ''
        // ]);
        // DB::table('services')->insert([
        //   'name' => 'إعداد العقود والاتفاقيات',
        //   'descreption' =>' يمكنك تقديم خدمات إعداد العقود والاتفاقيات لعملائك، بما في ذلك عقود العمل والتأجير والبيع والشراء وغيرها، والتأكد من صحة العقود وتوافقها مع القوانين واللوائح في المملكة العربية السعودية.',
        //   'image' => ''
        // ]);
        // DB::table('services')->insert([
        //   'name' => 'الإرث والوصايا',
        //   'descreption' =>'يمكنك تقديم خدمات الإرث والوصايا لعملائك، ومساعدتهم في إعدادوثائق الوصاية وتحديد الميراث وتوزيعه بين الورثة، والعمل على حل النزاعات المتعلقة بالإرث.',
        //   'image' => ''
        // ]);
        // DB::table('services')->insert([
        //   'name' => 'التمثيل القانوني للشركات',
        //   'descreption' =>'مكنك تقديم خدمات التمثيل القانوني للشركات في المملكة العربية السعودية، وتوفير الاستشارات والإجابات القانونية للشركات، ومساعدتهم في إعداد العقود والاتفاقيات والمستندات الرسمية الأخرى المتعلقة بالشركات.',
        //   'image' => ''
        // ]);
    }
}
