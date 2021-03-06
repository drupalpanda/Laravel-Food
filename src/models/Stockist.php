<?php namespace Fbf\LaravelFood;

class Stockist extends BaseModel {

	/**
	 * Name of the table to use for this model
	 * @var string
	 */
	protected $table = 'fbf_food_stockists';

	public function products()
	{
		return $this->belongsToMany('Fbf\LaravelFood\Product', 'fbf_food_product_stockist');
	}

	public function getLogo()
	{
		if (empty($this->logo))
		{
			return $this->name;
		}
		$html = '<img src="'.\Config::get('laravel-food::images.stockists.logo.resized.dir').$this->logo.'"';
		$html .= ' width="'.\Config::get('laravel-food::images.stockists.logo.resized.width').'"';
		$html .= ' height="'.\Config::get('laravel-food::images.stockists.logo.resized.height').'"';
		$html .= ' alt="'.$this->name.'" />';
		return $html;
	}

	public function getRotatedLogo()
	{
		if (empty($this->rotated_logo))
		{
			return $this->name;
		}
		$html = '<img src="'.\Config::get('laravel-food::images.stockists.rotated_logo.resized.dir').$this->rotated_logo.'"';
		$html .= ' width="'.\Config::get('laravel-food::images.stockists.rotated_logo.resized.width').'"';
		$html .= ' height="'.\Config::get('laravel-food::images.stockists.rotated_logo.resized.height').'"';
		$html .= ' alt="'.$this->name.'" />';
		return $html;
	}


}