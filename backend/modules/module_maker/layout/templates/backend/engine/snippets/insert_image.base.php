
	/**
	 * Inserts an image in the database
	 *
	 * @param array $item
	 * @return int
	 */
	public static function insertImage(array $item)
	{
		$item['created_on'] = BackendModel::getUTCDate();

		return BackendModel::getContainer()->get('database')->insert('{$underscored_name}_images', $item);
	}
