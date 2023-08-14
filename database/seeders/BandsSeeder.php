<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsSeeder extends Seeder
{
    public function run()
    {
        $brandsData = [
            [
                'name' => 'Electrolux',
                'description' => 'Uma das principais marcas de eletrodomésticos, oferecendo uma ampla gama de produtos inovadores para sua casa.',
                'status' => 1,
            ],
            [
                'name' => 'Whirlpool',
                'description' => 'Especializada em eletrodomésticos de alta qualidade, a Whirlpool é reconhecida por sua durabilidade e desempenho excepcionais.',
                'status' => 1,
            ],
            [
                'name' => 'Samsung',
                'description' => 'Uma empresa global líder em tecnologia, oferecendo produtos eletrônicos, eletrodomésticos e soluções inovadoras.',
                'status' => 1,
            ],
            [
                'name' => 'LG',
                'description' => 'Inovando sua vida, LG oferece uma variedade de produtos eletrônicos e eletrodomésticos que combinam tecnologia avançada e design elegante.',
                'status' => 1,
            ],
            [
                'name' => 'Bosch',
                'description' => 'Bosch é sinônimo de excelência em engenharia e inovação. Sua linha de produtos abrange desde eletrodomésticos até tecnologias industriais.',
                'status' => 1,
            ],
            [
                'name' => 'Miele',
                'description' => 'Miele é conhecida por seus eletrodomésticos de alta qualidade e desempenho superior, proporcionando durabilidade e eficiência excepcionais.',
                'status' => 1,
            ],
            [
                'name' => 'Consul',
                'description' => 'Consul oferece soluções práticas para o lar, com produtos que facilitam a vida diária de seus clientes.',
                'status' => 1,
            ],
            [
                'name' => 'Fischer',
                'description' => 'Especializada em produtos para cozinha, a Fischer combina funcionalidade e estilo em suas soluções inovadoras.',
                'status' => 1,
            ],
            [
                'name' => 'Panasonic',
                'description' => 'Panasonic é uma marca diversificada que abrange eletrônicos, eletrodomésticos e soluções empresariais, sempre comprometida com a qualidade.',
                'status' => 1,
            ],
            [
                'name' => 'Sony',
                'description' => 'Inovação e entretenimento definem a Sony, que produz desde eletrônicos de ponta até conteúdo audiovisual.',
                'status' => 1,
            ],
            [
                'name' => 'Apple',
                'description' => 'A Apple revolucionou a indústria de tecnologia com seus produtos elegantes e intuitivos, incluindo iPhones, iPads e MacBooks.',
                'status' => 1,
            ],
            [
                'name' => 'Xiaomi',
                'description' => 'Xiaomi oferece uma ampla gama de dispositivos eletrônicos e produtos inteligentes a preços acessíveis, tornando a tecnologia mais acessível.',
                'status' => 1,
            ],
            [
                'name' => 'Philips',
                'description' => 'Philips é uma marca globalmente reconhecida por suas inovações em iluminação, eletrônicos e cuidados com a saúde.',
                'status' => 1,
            ],
            [
                'name' => 'Haier',
                'description' => 'Haier é uma marca líder em eletrodomésticos e eletrônicos, conhecida por sua abordagem inovadora e foco na qualidade.',
                'status' => 1,
            ],
        ];

        foreach ($brandsData as $brandData) {
            DB::table('bands')->insert($brandData);
        }
    }
}