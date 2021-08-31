<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $santri = [
		'registration_number' => 'required|numeric',
		'fullname' => 'required',
		'born_place' => 'required',
		'born_date' => 'required|valid_date',
		'domicile_block' => 'required',
		'educational_institute' => 'required'
	];

	public $order = [
		'santri_id' => 'required|numeric|is_not_unique[santri.id]',
		'car_id' => 'required|numeric|is_not_unique[cars.id]',
		'hours' => 'required|numeric|is_not_unique[prices.hours]'
	];

	public $price = [
		'car_id' => 'required|numeric|is_not_unique[cars.id]',
		'hours' => 'required|numeric',
		'price' => 'required|numeric',
		'honour' => 'required|numeric'
	];
}
