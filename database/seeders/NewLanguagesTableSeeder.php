<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Afrikaans', 'prefix' => 'af', 'flag_image_url' => 'https://flagcdn.com/w320/za.png'],
            ['name' => 'Albanian', 'prefix' => 'sq', 'flag_image_url' => 'https://flagcdn.com/w320/al.png'],
            ['name' => 'Akan', 'prefix' => 'ak', 'flag_image_url' => 'https://flagcdn.com/w320/gh.png'],
            ['name' => 'Amharic', 'prefix' => 'am', 'flag_image_url' => 'https://flagcdn.com/w320/et.png'],
            ['name' => 'Arabic', 'prefix' => 'ar', 'flag_image_url' => 'https://flagcdn.com/w320/sa.png'],
            ['name' => 'Armenian', 'prefix' => 'hy', 'flag_image_url' => 'https://flagcdn.com/w320/am.png'],
            ['name' => 'Ashanti', 'prefix' => 'ak', 'flag_image_url' => 'https://flagcdn.com/w320/gh.png'],
            ['name' => 'Azari', 'prefix' => 'az', 'flag_image_url' => 'https://flagcdn.com/w320/az.png'],
            ['name' => 'Azerbaijani', 'prefix' => 'az', 'flag_image_url' => 'https://flagcdn.com/w320/az.png'],
            ['name' => 'Bassa', 'prefix' => 'bs', 'flag_image_url' => 'https://flagcdn.com/w320/lr.png'],
            ['name' => 'Belarusian', 'prefix' => 'be', 'flag_image_url' => 'https://flagcdn.com/w320/by.png'],
            ['name' => 'Bengali', 'prefix' => 'bn', 'flag_image_url' => 'https://flagcdn.com/w320/bd.png'],
            ['name' => 'Bosnian', 'prefix' => 'bs', 'flag_image_url' => 'https://flagcdn.com/w320/ba.png'],
            ['name' => 'Braille', 'prefix' => 'zz', 'flag_image_url' => 'https://flagcdn.com/w320/zz.png'], // Placeholder
            ['name' => 'Bulgarian', 'prefix' => 'bg', 'flag_image_url' => 'https://flagcdn.com/w320/bg.png'],
            ['name' => 'Burmese', 'prefix' => 'my', 'flag_image_url' => 'https://flagcdn.com/w320/mm.png'],
            ['name' => 'Canadian', 'prefix' => 'en', 'flag_image_url' => 'https://flagcdn.com/w320/ca.png'],
            ['name' => 'Cambodian', 'prefix' => 'km', 'flag_image_url' => 'https://flagcdn.com/w320/kh.png'],
            ['name' => 'Cebuano', 'prefix' => 'ceb', 'flag_image_url' => 'https://flagcdn.com/w320/ph.png'],
            ['name' => 'Chinese', 'prefix' => 'zh', 'flag_image_url' => 'https://flagcdn.com/w320/cn.png'],
            ['name' => 'Chuukese', 'prefix' => 'chk', 'flag_image_url' => 'https://flagcdn.com/w320/fm.png'],
            ['name' => 'Croatian', 'prefix' => 'hr', 'flag_image_url' => 'https://flagcdn.com/w320/hr.png'],
            ['name' => 'Czech', 'prefix' => 'cs', 'flag_image_url' => 'https://flagcdn.com/w320/cz.png'],
            ['name' => 'Danish', 'prefix' => 'da', 'flag_image_url' => 'https://flagcdn.com/w320/dk.png'],
            ['name' => 'Dari', 'prefix' => 'prs', 'flag_image_url' => 'https://flagcdn.com/w320/af.png'],
            ['name' => 'Dutch', 'prefix' => 'nl', 'flag_image_url' => 'https://flagcdn.com/w320/nl.png'],
            ['name' => 'English', 'prefix' => 'en', 'flag_image_url' => 'https://flagcdn.com/w320/gb.png'],
            ['name' => 'Estonian', 'prefix' => 'et', 'flag_image_url' => 'https://flagcdn.com/w320/ee.png'],
            ['name' => 'Farsi', 'prefix' => 'fa', 'flag_image_url' => 'https://flagcdn.com/w320/ir.png'],
            ['name' => 'Finnish', 'prefix' => 'fi', 'flag_image_url' => 'https://flagcdn.com/w320/fi.png'],
            ['name' => 'Flemmish', 'prefix' => 'nl', 'flag_image_url' => 'https://flagcdn.com/w320/be.png'],
            ['name' => 'French', 'prefix' => 'fr', 'flag_image_url' => 'https://flagcdn.com/w320/fr.png'],
            ['name' => 'Fulani', 'prefix' => 'ff', 'flag_image_url' => 'https://flagcdn.com/w320/ng.png'],
            ['name' => 'Georgian', 'prefix' => 'ka', 'flag_image_url' => 'https://flagcdn.com/w320/ge.png'],
            ['name' => 'German', 'prefix' => 'de', 'flag_image_url' => 'https://flagcdn.com/w320/de.png'],
            ['name' => 'Greek', 'prefix' => 'el', 'flag_image_url' => 'https://flagcdn.com/w320/gr.png'],
            ['name' => 'Gujarati', 'prefix' => 'gu', 'flag_image_url' => 'https://flagcdn.com/w320/in.png'],
            ['name' => 'Haitian Creole', 'prefix' => 'ht', 'flag_image_url' => 'https://flagcdn.com/w320/ht.png'],
            ['name' => 'Hebrew', 'prefix' => 'he', 'flag_image_url' => 'https://flagcdn.com/w320/il.png'],
            ['name' => 'Hindi', 'prefix' => 'hi', 'flag_image_url' => 'https://flagcdn.com/w320/in.png'],
            ['name' => 'Hmong', 'prefix' => 'hmn', 'flag_image_url' => 'https://flagcdn.com/w320/la.png'],
            ['name' => 'Hungarian', 'prefix' => 'hu', 'flag_image_url' => 'https://flagcdn.com/w320/hu.png'],
            ['name' => 'Icelandic', 'prefix' => 'is', 'flag_image_url' => 'https://flagcdn.com/w320/is.png'],
            ['name' => 'Igbo', 'prefix' => 'ig', 'flag_image_url' => 'https://flagcdn.com/w320/ng.png'],
            ['name' => 'Locano', 'prefix' => 'ilo', 'flag_image_url' => 'https://flagcdn.com/w320/ph.png'],
            ['name' => 'Ilonggo', 'prefix' => 'hil', 'flag_image_url' => 'https://flagcdn.com/w320/ph.png'],
            ['name' => 'Indonesian', 'prefix' => 'id', 'flag_image_url' => 'https://flagcdn.com/w320/id.png'],
            ['name' => 'Italian', 'prefix' => 'it', 'flag_image_url' => 'https://flagcdn.com/w320/it.png'],
            ['name' => 'Japanese', 'prefix' => 'ja', 'flag_image_url' => 'https://flagcdn.com/w320/jp.png'],
            ['name' => 'Javanese', 'prefix' => 'jv', 'flag_image_url' => 'https://flagcdn.com/w320/id.png'],
            ['name' => 'Kannada', 'prefix' => 'kn', 'flag_image_url' => 'https://flagcdn.com/w320/in.png'],
            ['name' => 'Karen', 'prefix' => 'kar', 'flag_image_url' => 'https://flagcdn.com/w320/mm.png'],
            ['name' => 'Kazakh', 'prefix' => 'kk', 'flag_image_url' => 'https://flagcdn.com/w320/kz.png'],
            ['name' => 'Kinyarwanda', 'prefix' => 'rw', 'flag_image_url' => 'https://flagcdn.com/w320/rw.png'],
            ['name' => 'Kirundi', 'prefix' => 'rn', 'flag_image_url' => 'https://flagcdn.com/w320/bi.png'],
            ['name' => 'Korean', 'prefix' => 'ko', 'flag_image_url' => 'https://flagcdn.com/w320/kr.png'],
            ['name' => 'Kurdish', 'prefix' => 'ku', 'flag_image_url' => 'https://flagcdn.com/w320/tr.png'],
            ['name' => 'Kyrgyz', 'prefix' => 'ky', 'flag_image_url' => 'https://flagcdn.com/w320/kg.png'],
            ['name' => 'Lao', 'prefix' => 'lo', 'flag_image_url' => 'https://flagcdn.com/w320/la.png'],
            ['name' => 'Latvian', 'prefix' => 'lv', 'flag_image_url' => 'https://flagcdn.com/w320/lv.png'],
           
            ['name' => 'Lithuanian', 'prefix' => 'lt', 'flag_image_url' => 'https://flagcdn.com/w320/lt.png'],
            
            ['name' => 'Macedonian', 'prefix' => 'mk', 'flag_image_url' => 'https://flagcdn.com/w320/mk.png'],
        
            ['name' => 'Malay', 'prefix' => 'ms', 'flag_image_url' => 'https://flagcdn.com/w320/my.png'],
            
            ['name' => 'Marathi', 'prefix' => 'mr', 'flag_image_url' => 'https://flagcdn.com/w320/in.png'],
            ['name' => 'Marshallese', 'prefix' => 'mh', 'flag_image_url' => 'https://flagcdn.com/w320/mh.png'],
            ['name' => 'Mende', 'prefix' => 'men', 'flag_image_url' => 'https://flagcdn.com/w320/sl.png'],
            ['name' => 'Mongolian', 'prefix' => 'mn', 'flag_image_url' => 'https://flagcdn.com/w320/mn.png'],
            ['name' => 'Montenegrin', 'prefix' => 'cnr', 'flag_image_url' => 'https://flagcdn.com/w320/me.png'],
            ['name' => 'Nepali', 'prefix' => 'ne', 'flag_image_url' => 'https://flagcdn.com/w320/np.png'],
            ['name' => 'Norwegian', 'prefix' => 'no', 'flag_image_url' => 'https://flagcdn.com/w320/no.png'],
           
            ['name' => 'Oromo', 'prefix' => 'om', 'flag_image_url' => 'https://flagcdn.com/w320/et.png'],
            ['name' => 'Pashto', 'prefix' => 'ps', 'flag_image_url' => 'https://flagcdn.com/w320/af.png'],
            ['name' => 'Polish', 'prefix' => 'pl', 'flag_image_url' => 'https://flagcdn.com/w320/pl.png'],
            ['name' => 'Portuguese', 'prefix' => 'pt', 'flag_image_url' => 'https://flagcdn.com/w320/pt.png'],
            ['name' => 'Punjabi', 'prefix' => 'pa', 'flag_image_url' => 'https://flagcdn.com/w320/in.png'],
            ['name' => 'Romanian', 'prefix' => 'ro', 'flag_image_url' => 'https://flagcdn.com/w320/ro.png'],
            ['name' => 'Russian', 'prefix' => 'ru', 'flag_image_url' => 'https://flagcdn.com/w320/ru.png'],
            ['name' => 'Samoan', 'prefix' => 'sm', 'flag_image_url' => 'https://flagcdn.com/w320/ws.png'],
            ['name' => 'Serbian', 'prefix' => 'sr', 'flag_image_url' => 'https://flagcdn.com/w320/rs.png'],
          
            ['name' => 'Sinhala', 'prefix' => 'si', 'flag_image_url' => 'https://flagcdn.com/w320/lk.png'],
            ['name' => 'Slovak', 'prefix' => 'sk', 'flag_image_url' => 'https://flagcdn.com/w320/sk.png'],
            ['name' => 'Slovenian', 'prefix' => 'sl', 'flag_image_url' => 'https://flagcdn.com/w320/si.png'],
            ['name' => 'Somali', 'prefix' => 'so', 'flag_image_url' => 'https://flagcdn.com/w320/so.png'],
            ['name' => 'Spanish', 'prefix' => 'es', 'flag_image_url' => 'https://flagcdn.com/w320/es.png'],
            ['name' => 'Swahili', 'prefix' => 'sw', 'flag_image_url' => 'https://flagcdn.com/w320/tz.png'],
            ['name' => 'Swedish', 'prefix' => 'sv', 'flag_image_url' => 'https://flagcdn.com/w320/se.png'],
            ['name' => 'Tagalog', 'prefix' => 'tl', 'flag_image_url' => 'https://flagcdn.com/w320/ph.png'],
            ['name' => 'Tajik', 'prefix' => 'tg', 'flag_image_url' => 'https://flagcdn.com/w320/tj.png'],
            ['name' => 'Tamil', 'prefix' => 'ta', 'flag_image_url' => 'https://flagcdn.com/w320/in.png'],
            ['name' => 'Telugu', 'prefix' => 'te', 'flag_image_url' => 'https://flagcdn.com/w320/in.png'],
            ['name' => 'Thai', 'prefix' => 'th', 'flag_image_url' => 'https://flagcdn.com/w320/th.png'],
            ['name' => 'Tigrinya', 'prefix' => 'ti', 'flag_image_url' => 'https://flagcdn.com/w320/er.png'],
            ['name' => 'Tongan', 'prefix' => 'to', 'flag_image_url' => 'https://flagcdn.com/w320/to.png'],
            ['name' => 'Turkish', 'prefix' => 'tr', 'flag_image_url' => 'https://flagcdn.com/w320/tr.png'],
            ['name' => 'Turkmen', 'prefix' => 'tk', 'flag_image_url' => 'https://flagcdn.com/w320/tm.png'],
            ['name' => 'Twi', 'prefix' => 'tw', 'flag_image_url' => 'https://flagcdn.com/w320/gh.png'],
            ['name' => 'Ukrainian', 'prefix' => 'uk', 'flag_image_url' => 'https://flagcdn.com/w320/ua.png'],
            ['name' => 'Urdu', 'prefix' => 'ur', 'flag_image_url' => 'https://flagcdn.com/w320/pk.png'],
           
            ['name' => 'Uzbek', 'prefix' => 'uz', 'flag_image_url' => 'https://flagcdn.com/w320/uz.png'],
            ['name' => 'Vietnamese', 'prefix' => 'vi', 'flag_image_url' => 'https://flagcdn.com/w320/vn.png'],
            
            ['name' => 'Wolof', 'prefix' => 'wo', 'flag_image_url' => 'https://flagcdn.com/w320/sn.png'],
           
            ['name' => 'Yoruba', 'prefix' => 'yo', 'flag_image_url' => 'https://flagcdn.com/w32000/ng.png'],
            ['name' => 'Zulu', 'prefix' => 'zu', 'flag_image_url' => 'https://flagcdn.com/w32000/za.png'],
        ];
        DB::table('languages')->insert($languages);
    }
}
