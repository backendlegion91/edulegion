@extends('layouts.master')

@section('content')
<div class="max-w-5xl mx-auto py-10 px-6">
    <h1 class="text-3xl font-bold text-blue-700 mb-8">🎓 2025 Admission Application Form</h1>

    <!-- Flash Validation Errors -->
    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
            <ul class="list-disc pl-5 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('student.application.submit') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 shadow-md rounded-lg space-y-8">
        @csrf

        <!-- Student Photograph -->
        <div>
            <h2 class="text-xl font-semibold text-blue-600 mb-4">🖼️ Student Photograph</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium">Upload Passport Size Photo</label>
                    <input type="file" name="photo" accept="image/*" required class="w-full border rounded px-3 py-2" />
                    @error('photo') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>

        <!-- Student Details -->
        <div>
            <h2 class="text-xl font-semibold text-blue-600 mb-4">👤 Student Details</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Dynamic Fields -->
                @foreach ([
                    'name' => 'Full Name',
                    'dob' => 'Date of Birth',
                    'joining_class' => 'Joining Class',
                    'nationality' => 'Nationality',
                    'caste' => 'Caste',
                    'language' => 'Language'
                ] as $field => $label)
                    <div>
                        <label class="block text-sm font-medium">{{ $label }}</label>
                        <input
                            type="{{ $field === 'dob' ? 'date' : 'text' }}"
                            name="{{ $field }}"
                            id="{{ $field }}"
                            value="{{ old($field) }}"
                            required
                            class="w-full border rounded px-3 py-2" />
                        @error($field) <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                @endforeach

                <!-- Age (auto-calculated) -->
                <div>
                    <label class="block text-sm font-medium">Age</label>
                    <input type="number" name="age" id="age" value="{{ old('age') }}" readonly class="w-full border rounded px-3 py-2 bg-gray-100 cursor-not-allowed" />
                    @error('age') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Gender -->
                <div>
                    <label class="block text-sm font-medium">Gender</label>
                    <select name="gender" required class="w-full border rounded px-3 py-2">
                        <option value="">Select</option>
                        @foreach (['male', 'female', 'other'] as $g)
                            <option value="{{ $g }}" {{ old('gender') == $g ? 'selected' : '' }}>{{ ucfirst($g) }}</option>
                        @endforeach
                    </select>
                    @error('gender') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Address -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium">Address</label>
                    <textarea name="address" rows="3" required class="w-full border rounded px-3 py-2 resize-none">{{ old('address') }}</textarea>
                    @error('address') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Blood Group -->
                <div>
                    <label class="block text-sm font-medium">Blood Group</label>
                    <select name="blood_group" class="w-full border rounded px-3 py-2">
                        <option value="">Select</option>
                        @foreach(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $bg)
                            <option value="{{ $bg }}" {{ old('blood_group') == $bg ? 'selected' : '' }}>{{ $bg }}</option>
                        @endforeach
                    </select>
                    @error('blood_group') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm font-medium">Category</label>
                    <select name="category" required class="w-full border rounded px-3 py-2">
                        <option value="">Select</option>
                        @foreach(['General', 'OBC', 'SC', 'ST', 'EWS', 'Others'] as $cat)
                            <option value="{{ $cat }}" {{ old('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                    @error('category') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- NRI Status -->
                <div>
                    <label class="block text-sm font-medium">NRI Status</label>
                    <select name="nri_status" id="nri_status" required class="w-full border rounded px-3 py-2">
                        <option value="">Select</option>
                        <option value="NRI" {{ old('nri_status') == 'NRI' ? 'selected' : '' }}>NRI</option>
                        <option value="Non-NRI" {{ old('nri_status') == 'Non-NRI' ? 'selected' : '' }}>Non-NRI</option>
                    </select>
                    @error('nri_status') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Conditional: NRI Certificate -->
                <div class="md:col-span-2 hidden" id="nri_certificate_section">
                    <label class="block text-sm font-medium">Upload NRI Certificate</label>
                    <input type="file" name="nri_certificate" class="w-full border rounded px-3 py-2" />
                    @error('nri_certificate') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>

     <!-- Parent Details -->
     <div>
            <h2 class="text-xl font-semibold text-blue-600 mb-4">👪 Parent Details</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    'father_name' => "Father's Name",
                    'mother_name' => "Mother's Name",
                    'father_education' => "Father's Education",
                    'mother_education' => "Mother's Education",
                    'father_income' => "Father's Income",
                    'mother_income' => "Mother's Income"
                ] as $field => $label)
                    <div>
                        <label class="block text-sm font-medium">{{ $label }}</label>
                        <input type="{{ str_contains($field, 'income') ? 'number' : 'text' }}"
                               name="{{ $field }}"
                               value="{{ old($field) }}"
                               required
                               class="w-full border rounded px-3 py-2" />
                        @error($field) <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                @endforeach

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium">Father's Address</label>
                    <textarea name="father_address" rows="3" required class="w-full border rounded px-3 py-2 resize-none">{{ old('father_address') }}</textarea>
                    @error('father_address') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium">Mother's Address</label>
                    <textarea name="mother_address" rows="3" required class="w-full border rounded px-3 py-2 resize-none">{{ old('mother_address') }}</textarea>
                    @error('mother_address') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
                       <!-- Sibling Details -->
        <div>
            <h2 class="text-xl font-semibold text-blue-600 mb-4">👧 Sibling Details</h2>
            <p class="text-sm text-gray-500 mb-3">If the student has siblings studying in this institution, please fill in their details.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    'sibling_name' => 'Sibling Name',
                    'sibling_class' => 'Sibling Class',
                    'sibling_roll' => 'Sibling Roll No'
                ] as $field => $label)
                    <div>
                        <label class="block text-sm font-medium">{{ $label }}</label>
                        <input type="text" name="{{ $field }}" value="{{ old($field) }}" class="w-full border rounded px-3 py-2" />
                        @error($field) <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Upload Documents -->
        <div>
            <h2 class="text-xl font-semibold text-blue-600 mb-4">📄 Upload Documents</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    'digital_sign' => 'Digital Signature',
                    'cast_certificate' => 'Caste Certificate',
                    'income_certificate' => 'Income Certificate',
                    'addhar_certificate' => 'Aadhar Card',
                    'birth_certificate' => 'Birth Certificate',
                    'previous_marksheet' => 'Previous Class Marksheet'
                ] as $field => $label)
                    <div>
                        <label class="block text-sm font-medium">{{ $label }}</label>
                        <input type="file" name="{{ $field }}" required class="w-full border rounded px-3 py-2" />
                        @error($field) <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Confirmation -->
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" name="confirm" required class="form-checkbox text-blue-600 rounded" />
                <span class="ml-2 text-sm text-gray-700">I confirm that all the information provided above is correct.</span>
            </label>
            @error('confirm') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Submit Buttons -->
        <div class="flex flex-col md:flex-row gap-4 pt-4">
            <button type="submit" name="action" value="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
                Submit & Pay
            </button>
            <button type="submit" name="action" value="draft" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded shadow">
                Save as Draft
            </button>
        </div>
    </form>
</div>

<!-- Scripts -->
<script>
    // Auto-calculate age
    document.getElementById('dob').addEventListener('change', function () {
        const dob = new Date(this.value);
        const today = new Date();
        let age = today.getFullYear() - dob.getFullYear();
        const m = today.getMonth() - dob.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
            age--;
        }
        document.getElementById('age').value = age;
    });

    // NRI Certificate toggle
    const nriStatus = document.getElementById('nri_status');
    const nriCertSection = document.getElementById('nri_certificate_section');

    function toggleNriCert() {
        nriCertSection.classList.toggle('hidden', nriStatus.value !== 'NRI');
    }

    nriStatus.addEventListener('change', toggleNriCert);
    window.addEventListener('DOMContentLoaded', toggleNriCert);
</script>

@endsection
