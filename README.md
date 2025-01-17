# Makeitdigi Hide Shipping Methods

**Description:**

This WooCommerce plugin automatically hides all other shipping methods on the checkout page when the "Free Shipping" method (identified as "Ücretsiz Kargo" in Turkish) is available for the order. This ensures that customers are only presented with the free shipping option when it's applicable, simplifying the checkout process and avoiding potential confusion.

**Key Features:**

- Automatically hides all shipping methods except "Free Shipping" when it's available.
- Specifically targets the "Free Shipping" method with the ID `free_shipping`.
- Lightweight and easy to install.

**Installation:**

1. Download the plugin ZIP file.
2. Go to your WordPress admin panel, navigate to **Plugins** > **Add New**.
3. Click **Upload Plugin** and upload the downloaded ZIP file.
4. Click **Install Now** and then **Activate Plugin**.

**Usage:**

Once the plugin is installed and activated, it works automatically. There are no settings to configure.

- When a customer proceeds to the checkout page and the "Free Shipping" method is available (e.g., based on cart total or other configured conditions), all other shipping methods will be hidden.
- If "Free Shipping" is not available, all configured shipping methods will be displayed as usual.

**Technical Details:**

The plugin uses the `woocommerce_package_rates` filter to modify the available shipping methods. It checks if a shipping method with the ID `free_shipping` exists in the list of available rates. If it does, the plugin returns an array containing only the free shipping method; otherwise, it returns the original array of shipping methods.

**Contributing:**

Feel free to contribute to the development of this plugin by submitting pull requests or opening issues on the [GitHub repository](https://github.com/montecit/woocommerce-hide-shipping-methods).

**License:**

This plugin is open-sourced and licensed under the [MIT license](LICENSE).

**Author:**

makeitdigi - [www.makeitdigi.com](https://www.makeitdigi.com)
