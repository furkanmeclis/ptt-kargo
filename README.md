# PTT Kargo Laravel Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/furkanmeclis/ptt-kargo.svg?style=flat-square)](https://packagist.org/packages/furkanmeclis/ptt-kargo)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/furkanmeclis/ptt-kargo/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/furkanmeclis/ptt-kargo/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/furkanmeclis/ptt-kargo.svg?style=flat-square)](https://packagist.org/packages/furkanmeclis/ptt-kargo)

Laravel package for PTT Cargo SOAP API integration with auto-generated classes from WSDL, retry mechanism, and logging.

## Installation

```bash
composer require furkanmeclis/ptt-kargo
```

## Configuration

Publish the configuration file:

```bash
php artisan vendor:publish --tag="ptt-kargo-config"
```

Add to your `.env`:

```env
PTT_KARGO_WSDL=https://pttws.ptt.gov.tr/PttBilgi/services/Sorgu?wsdl
PTT_KARGO_USERNAME=your_username
PTT_KARGO_PASSWORD=your_password
PTT_KARGO_TIMEOUT=30
PTT_KARGO_RETRY_COUNT=3
PTT_KARGO_RETRY_DELAY=500
PTT_KARGO_LOG_ENABLED=true
PTT_KARGO_ENVIRONMENT=test
```

## Usage

### Basic Example

```php
use FurkanMeclis\PttKargo\Facades\PttKargo;
use FurkanMeclis\PttKargo\Data\InputMahalle;
use FurkanMeclis\PttKargo\Data\mahalleSorgula;

// Create request object
$input = new InputMahalle();
$input->setIl_id('34'); // Istanbul
$input->setIlce_id('1'); // Example district ID
$input->setKullanici(config('ptt-kargo.username'));
$input->setSifre(config('ptt-kargo.password'));

// Create SOAP request
$request = new mahalleSorgula($input);

// Call the service method
$response = PttKargo::mahalleSorgula($request);

// Access response data
$mahalleler = $response->getMahalleSorgulaResult();
```

### Alternative: Using the call method

```php
use FurkanMeclis\PttKargo\Facades\PttKargo;
use FurkanMeclis\PttKargo\Data\InputMahalle;
use FurkanMeclis\PttKargo\Data\mahalleSorgula;

$input = new InputMahalle();
$input->setIl_id('34');
$input->setIlce_id('1');
$input->setKullanici(config('ptt-kargo.username'));
$input->setSifre(config('ptt-kargo.password'));

$request = new mahalleSorgula($input);

// Using the call method
$response = PttKargo::call('mahalleSorgula', [$request]);
```

### Available Service Methods

The package includes all PTT Kargo SOAP service methods. Some examples:

- `mahalleSorgula` - Query neighborhoods
- `ilceSorgula` - Query districts
- `kargomatListesi` - Get cargo box list
- `kargoUcret` - Calculate cargo price
- `teslimSure` - Get delivery time
- `gonderiDurumAciklamaSorgula` - Query shipment status

All methods use the generated classes from `FurkanMeclis\PttKargo\Data` namespace.

### Automatic Features

The package automatically handles:
- **Retry logic** with exponential backoff (500ms → 1000ms → 2000ms)
- **Request/response logging** to `storage/logs/ptt-kargo.log`
- **Exception handling** (Authentication, Timeout, SOAP errors)

**Note:** This package includes auto-generated PHP classes from the PTT Kargo WSDL. The generated classes are already included and ready to use.

## Testing

```bash
composer test
composer analyse
composer format
```

## License

MIT
