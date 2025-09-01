@component('mail::message')
# 🎓 Application Received

Hi {{ $application->full_name }},

We’ve successfully received your application. Thank you for completing the process!

---

**🆔 Application ID:** {{ $application->id }}  
**📘 Program:** {{ $application->program_name }}  
**📅 Submitted On:** {{ $application->created_at->format('M d, Y') }}

@component('mail::button', ['url' => url('/student/applications/' . $application->id)])
🔎 View Your Application
@endcomponent

We will contact you shortly regarding the next steps in the admission process.

Thanks,  
**{{ config('app.name') }} Admissions Team**
@endcomponent
