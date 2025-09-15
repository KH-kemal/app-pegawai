<php>
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Employee extends Model
    {
        use HasFactory;

        protected $fillable = [
            'nama_lengkap',
            'email',
            'nomor_telepon',
            'tanggal_lahir',
            'alamat',
            'tanggal_masuk',
            'departemen_id',
            'jabatan_id',
            'status',
        ];
    }
</php>