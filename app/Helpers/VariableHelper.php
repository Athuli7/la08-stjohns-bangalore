<?php

namespace App\Helpers;

use App\Models\StringVariable;
use App\Models\BooleanVariable;
use App\Models\NumericVariable;
use App\Models\TextblockVariable;

class VariableHelper
{
	public static function getVariables(): array
	{
		$ret_array = [];
		$ret_array['strings'] = StringVariable::whereTenantId(config('app.tenant_id'))->get()->pluck('value', 'key');
		$ret_array['booleans'] = BooleanVariable::whereTenantId(config('app.tenant_id'))->get()->pluck('value', 'key');
		$ret_array['numerics'] = NumericVariable::whereTenantId(config('app.tenant_id'))->get()->pluck('value', 'key');
		return $ret_array;
	}

	public static function getString($key, $default_value = null)
	{
		return StringVariable::getValue(config('app.tenant_id'), $key, $default_value ?? 'set `' . $key . '`');
	}
	public static function getTextblock($key, $default_value = null)
	{
		return TextblockVariable::getValue(config('app.tenant_id'), $key, $default_value ?? 'set `' . $key . '`');
	}
	public static function getBoolean($key, $default_value = null)
	{
		return BooleanVariable::getValue(config('app.tenant_id'), $key, $default_value ?? 'set `' . $key . '`');
	}
	public static function getNumeric($key, $default_value = null)
	{
		return NumericVariable::getValue(config('app.tenant_id'), $key, $default_value ?? 'set `' . $key . '`');
	}



	public static function setString($key, $value)
	{
		return StringVariable::setValue(config('app.tenant_id'), $key, $value);
	}
	public static function setTextblock($key, $value)
	{
		return TextblockVariable::setValue(config('app.tenant_id'), $key, $value);
	}
	public static function setBoolean($key, $value)
	{
		return BooleanVariable::setValue(config('app.tenant_id'), $key, $value);
	}
	public static function setNumeric($key, $value)
	{
		return NumericVariable::setValue(config('app.tenant_id'), $key, $value);
	}
}
