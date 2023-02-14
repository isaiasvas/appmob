<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sku');
            $table->string("name")->nullable(true);
            $table->string("type")->nullable(true);
            $table->string("status")->nullable(true);
            $table->boolean("featured")->default(false)->nullable(true);
            $table->string("catalog_visibility")->nullable(true);
            $table->longText("description")->nullable(true);
            $table->text("short_description")->nullable(true);
            $table->string("price")->nullable(true);
            $table->string("regular_price")->nullable(true);
            $table->string("sale_price")->nullable(true);
            $table->string("date_on_sale_from")->nullable(true);
            $table->string("date_on_sale_from_gmt")->nullable(true);
            $table->string("date_on_sale_to")->nullable(true);
            $table->string("date_on_sale_to_gmt")->nullable(true);
            $table->string("price_html")->nullable(true);
            $table->boolean("on_sale")->default(false);
            $table->string("purchasable")->nullable(true);

            $table->string("total_sales")->nullable(true);
            $table->string("virtual")->nullable(true);
            $table->string("downloadable")->nullable(true);
            $table->string("downloads")->nullable(true);
            $table->string("download_limit")->nullable(true);
            $table->string("download_expiry")->nullable(true);

            $table->string("external_url")->nullable(true);
            $table->string("button_text")->nullable(true);
            $table->string("tax_status")->nullable(true);
            $table->string("manage_stock")->nullable(true);
            $table->string("stock_quatity")->nullable(true);
            $table->string("stock_status")->nullable(true);

            $table->string("backorders")->nullable(true);
            $table->string("backorders_allowed")->nullable(true);
            $table->string("backordered")->nullable(true);
            $table->string("sold_individually")->nullable(true);
            $table->string("height")->nullable(true);
            $table->string("length")->nullable(true);
            $table->string("width")->nullable(true);
            $table->string("shipping_required")->nullable(true);
            $table->string("shipping_taxable")->nullable(true);
            $table->string("shipping_class")->nullable(true);
            $table->string("shipping_class_id")->nullable(true);
            $table->string("reviews_allowed")->nullable(true);

            $table->string("average_rating")->nullable(true);
            $table->string("rating_count")->nullable(true);
            $table->string("related_ids")->nullable(true);
            $table->string("upsell_ids")->nullable(true);
            $table->string("cross_sell_ids")->nullable(true);
            $table->string("parent_id")->nullable(true);

            $table->string("purchase_note")->nullable(true);
            $table->string("images")->nullable(true);
            $table->string("tags")->nullable(true);
            $table->string("attributes")->nullable(true);
            $table->string("default_ttributes")->nullable(true);
            $table->string("variations")->nullable(true);

            $table->string("grouped_products")->nullable(true);
            $table->string("menu_order")->nullable(true);
            $table->string("meta_data")->nullable(true);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
