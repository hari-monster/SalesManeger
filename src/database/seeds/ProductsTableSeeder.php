<?php

use App\Model\Image;
use Illuminate\Database\Seeder;
use App\Model\Product;
use App\Model\ProductTranslation;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($itemNo = 0; $itemNo <= 5; $itemNo++) {
            if (count(Product::query()->all()) == 0) {
                $products = Product::create([
                    'code' => 'shirt' . $itemNo,
                    'memo' => '商品メモ' . $itemNo,
                ]);

                ProductTranslation::create([
                    'product_id' => $products->id,
                    'name' => 'Tシャツ' . $itemNo,
                    'local' => 'ja',
                    'description' => '世界にただ一つのTシャツ',
                ]);

                $productImages = [
                    'https://1.bp.blogspot.com/-CnRWDH6xLkg/Xhwp82zYF9I/AAAAAAABW5s/d2LCtyohROMhr9q9A1QDpkmrbwuhPh49ACNcBGAsYHQ/s200/fashion_happi1_red.png',
                    'https://1.bp.blogspot.com/-HMY2go1kP8w/XZR9VMahV3I/AAAAAAABVRc/AJZ81jkV2J4KC8ER0KoSduv3zr6xczxiACNcBGAsYHQ/s400/fashion_boot_kneehigh.png',
                    'https://1.bp.blogspot.com/-dHs2S3tYsMk/XQjuBQQgy8I/AAAAAAABTOs/oyx_FG5j70wOVsBGwKnUoXngBqqpNG6MQCLcBGAs/s400/fashion_shiborizome.png',
                    'https://4.bp.blogspot.com/-GxWxdP2QYFg/XGjzWhF7cdI/AAAAAAABRoQ/6iZn6BY-NLoTsE_YyFhYQDJvFc-k-XeYgCLcBGAs/s400/war_ghillie_suit.png',
                    'https://2.bp.blogspot.com/-WwXx5XqI1lQ/W-0gtuWbRyI/AAAAAAABQMU/p7fOy38Yc1AJpxfapv6IN5lJRJUIBaEbgCLcBGAs/s800/job_staff_tshirt_woman.png',
                ];

                //TOD　ファイルアップロード処理で、pathを取得
//                $path = $this->fileUpload(array_rand($productImages));
//                Image::create([
//                ]);

//                TODO ImageTranslationmMdelSeederの作成
//                ImageTranslation::create([]);
            }
        }
    }

    //TODO 指定したディレクトリ($dir)のローカルストレージにファイルを保存し、保存したpathを返却する。
    public function fileUpload(string $dir): string
    {

        $path = 'aa';
        return $path;
    }
}
