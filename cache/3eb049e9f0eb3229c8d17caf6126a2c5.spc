a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:37:"The Software Freedom Law Center Blog.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:36:"http://www.softwarefreedom.org/blog/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:45:"All blogs at the Software Freedom Law Center.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-us";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:13:"lastBuildDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 10 Aug 2012 11:06:00 -0400";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:10:{i:0;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"An open infrastructure could curb high-frequency trading disasters
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:91:"http://www.softwarefreedom.org/blog/2012/aug/10/open-infrastructure-high-frequency-trading/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5078:"<p><i>Blog post by <strong>Aaron Williamson</strong>.  Please email any comments on this entry to <a href="mailto:aaronw@softwarefreedom.org">&lt;aaronw@softwarefreedom.org&gt;</a>.</i></p>
<p>In yesterday's New York
Times, <a href="http://www.nytimes.com/2012/08/09/opinion/after-knight-capital-new-code-for-trades.html">Ellen
Ullman criticized</a>
the SEC's <a href="http://sec.gov/news/press/2012/2012-151.htm">suggestion</a> that mandated software testing could prevent
automated-trading catastrophes like the one
that <a href="http://www.cnbc.com/id/48448165/Error_by_Knight_Capital_roils_stocks_trading">shook
the market</a>
and <a href="http://in.reuters.com/article/2012/08/09/knightcapital-stockinventory-idINL2E8J906X20120809">nearly
bankrupted</a> Knight Capital at the beginning of this month. More
testing won't work, according to Ullman, for a few reasons. First,
computer systems are too complex to ever "fully test," because they
comprise multiple software and hardware subsystems, some proprietary,
others (like routers) containing "inaccessible" embedded code. Second,
all code contains bugs, and because bugs can be caused by interactions between modules and even by attempts to fix other bugs, no
code will ever be completely bug-free. And finally, it is too
difficult to delineate insignificant changes to the software from
those that really require testing.</p>

<p>Ullman's critique of a testing-centric solution has some
merit, although few professional developers test individual "coding changes" (they really do test entire systems anytime changes are introduced). But her proposed alternative is heavyweight and
difficult to square with the needs of the industry. She proposes making
brokers liable for losses caused by trading errors in order to induce
them to write "artificial intelligence programs that recognize unusual
patterns" and shut down runaway trading algorithms. Her model is the regulation of
credit card companies: since they're liable for most fraudulent
charges, they've created software to track purchases and put holds on
accounts showing suspicious activity. In Ullman's scheme, the SEC
would also create its own electronic sentries as a backstop.</p>

<p>I doubt Ullman's assumption that the rogue trading program problem can be fought with A.I. as successfully as credit card fraud. The speed of automatic trading&mdash;the systems can evaluate and
execute thousands of trades per second&mdash;makes automated trouble-shooting much trickier. Even very fast A.I. would likely take more than a few seconds to spot bad behavior reliably.  This is time enough for several thousand erroneous trades to be made. And false positives would be far more expensive, since for every second
the program was down, thousands of legitimate trades would not be
made. In the credit card context, where fraud happens at human speed,
it makes sense to have humans double-check the computer's
determinations, but Ullman's suggestion that the same human-backup
process would port easily to the algorithmic trading context is
ill-considered.</p>

<p>Algorithmic traders could reduce their error rate much less
expensively (and more realistically) by collaborating on a common
infrastructure for executing trades, using free and open source
software everyone could review, test and improve. Trading firms are understandably tight-lipped about the
algorithms that actually choose which trades to make; these are the
source of their competitive advantage over other
firms. But most of the pieces of everyone's high-frequency trading systems are
not so secret, including the real-time operating system, high-volume message
queuing, and software actually executing the selected
trades. By opening, standardizing, and collaborating on these
ancillary but complex components, trading firms could reduce errors
and improve reliability, all without exposing their trading
strategies. A common infrastructure used and collaboratively produced
by several firms would be better-tested than the balkanized systems in
use now, and less prone to the interaction effects that Ullman finds prevalent in complex systems. Open code would also enable the SEC
to audit the system directly, without the complexity and expense of AI "watchers."</p>

<p>Doubtless
many firms believe their competitive advantage derives partly from proprietary
kernel modifications or optimizations to their messaging systems. But the Knight Capital failure,
the <a href="https://en.wikipedia.org/wiki/2010_Flash_Crash">2010
Flash Crash</a>, and similar episodes have made it clear that trading
firms&mdash;as well as their investors and the market as a whole&mdash;pay a heavy
price for their secrecy. That
price will only increase if the SEC passes expensive regulations to
deter future failures. If the firms can work together now, they may
find that, by turning their infrastructure into shared, standard
components, they can not only keep the regulators at bay, but also free their own
resources to concentrate on the trading algorithms that are the true value add to their business.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:45:"aaronw@softwarefreedom.org (Aaron Williamson)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 10 Aug 2012 11:06:00 -0400";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:91:"http://www.softwarefreedom.org/blog/2012/aug/10/open-infrastructure-high-frequency-trading/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:54:"Microsoft confirms UEFI fears, locks down ARM devices
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:93:"http://www.softwarefreedom.org/blog/2012/jan/12/microsoft-confirms-UEFI-fears-locks-down-ARM/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5644:"<p><i>Blog post by <strong>Aaron Williamson</strong>.  Please email any comments on this entry to <a href="mailto:aaronw@softwarefreedom.org">&lt;aaronw@softwarefreedom.org&gt;</a>.</i></p>
<p>At the beginning of
December, <a href="http://softwarefreedom.org/news/2011/dec/02/proposed-dmca-exemption/">we
warned the Copyright Office</a> that operating system vendors would
use <a href="https://en.wikipedia.org/wiki/Extensible_Firmware_Interface">UEFI</a>
secure boot anticompetitively, by colluding with hardware partners to
exclude alternative operating systems. As Glyn Moody <a href="http://blogs.computerworlduk.com/open-enterprise/2012/01/is-microsoft-blocking-linux-booting-on-arm-based-hardware/index.htm">points out</a>, Microsoft has wasted no time in revising its <a href="http://download.microsoft.com/download/A/D/F/ADF5BEDE-C0FB-4CC0-A3E1-B38093F50BA1/windows8-hardware-cert-requirements-system.pdf">Windows
Hardware Certification Requirements</a> to effectively ban most alternative operating systems on <a href="https://en.wikipedia.org/wiki/ARM_architecture">ARM</a>-based devices that ship with Windows 8.</p>

<p>The Certification Requirements define (on page 116) a "custom"
secure boot mode, in which a physically present user can add
signatures for alternative operating systems to the system's signature
database, allowing the system to boot those operating systems. But for
ARM devices, Custom Mode is prohibited: "On an ARM system, it is
forbidden to enable Custom Mode. Only Standard Mode may be enable."
[sic] Nor will users have the choice to simply disable secure boot, as they will on non-ARM systems: "Disabling Secure [Boot] MUST NOT be possible on ARM systems." [sic] Between these two requirements, any
ARM device that ships with Windows 8 will never run another operating system, unless it is signed with a preloaded key or a security exploit is found that enables users to
circumvent secure boot.</p>

<p>While UEFI secure boot is ostensibly about protecting user security, these non-standard restrictions have nothing to do with security. For non-ARM systems, Microsoft requires that Custom Mode be
<em>enabled</em>&mdash;a perverse demand if Custom Mode is a security
threat. But the ARM market is different for Microsoft in three important
respects:</p>

<ul>
<li><strong>Microsoft's hardware partners are different for ARM.</strong>  ARM
is of interest to Microsoft primarily for one reason: <a href="https://en.wikipedia.org/wiki/Windows_Mobile_7#System_requirements">all of the handsets</a>
running the Windows Phone operating system are ARM-based. By contrast,
  Intel rules the PC world. There, Microsoft's
secure boot requirements&mdash;which allow users
to add signatures in Custom Mode or disable secure boot
entirely&mdash;track very closely to the recommendations of the UEFI
Forum, of which Intel is a founding member.</li>

<li><strong>Microsoft doesn't need to support legacy Windows versions
on ARM.</strong> If Microsoft locked unsigned operating systems out of
new PCs, it would risk angering its own customers who prefer Windows
XP or Windows 7 (or, hypothetically, Vista). With no legacy versions to
support on ARM, Microsoft is eager to lock users out.</li>

<li><strong>Microsoft doesn't control sufficient market share on mobile
devices to raise antitrust concerns.</strong> While Microsoft doesn't
command quite the monopoly on PCs that it did in 1998, when it was
<a href="https://en.wikipedia.org/wiki/United_States_v._Microsoft">prosecuted
for antitrust violations</a>, it still
controls <a href="http://en.wikipedia.org/wiki/Usage_share_of_operating_systems">around
90%</a> of the PC operating system market&mdash;enough to be concerned
that banning non-Windows operating systems from Windows 8 PCs will
bring regulators knocking. Its tiny stake in the mobile market may
not be a business strategy, but for now it may provide a buffer for
its anticompetitive behavior there. (However, as ARM-based "ultrabooks" gain market share, this may change.)</li>
</ul>

<p>The new policy betrays the cynicism of
<a href="http://blogs.msdn.com/b/b8/archive/2011/09/22/protecting-the-pre-os-environment-with-uefi.aspx">Microsoft's
initial response</a> to concerns over Windows 8's secure boot requirement. When kernel hacker Matthew Garrett <a href="http://mjg59.dreamwidth.org/5552.html">expressed his concern</a> that PCs shipped with Windows 8 might prevent the installation of GNU/Linux and other free operating systems, Microsoft's Tony Mangefeste replied, "Microsoft’s philosophy is to provide customers with the best experience first, and allow them to make decisions themselves." It is clear now that opportunism, not philosophy, is guiding Microsoft's secure boot policy.</p>

<p>Before this week, this policy might have concerned only Windows Phone customers. But just yesterday, <a href="http://www.itworld.com/hardware/240039/qualcomm-targets-pcs-takes-aim-intels-ultrabooks">Qualcomm announced plans</a> to produce Windows 8 tablets and ultrabook-style laptops built around its ARM-based Snapdragon processors. Unless Microsoft changes its policy, these may be the first PCs ever produced that can never run anything but Windows, no matter how Qualcomm feels about limiting its customers' choices. SFLC predicted in our <a href="http://softwarefreedom.org/news/2011/dec/02/proposed-dmca-exemption/">comments to the Copyright Office</a> that misuse of UEFI secure boot would bring such restrictions, already common on smartphones, to PCs. Between Microsoft's new ARM secure boot policy and Qualcomm's announcement, this worst-case scenario is beginning to look inevitable.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:45:"aaronw@softwarefreedom.org (Aaron Williamson)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 12 Jan 2012 15:14:00 -0500";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:93:"http://www.softwarefreedom.org/blog/2012/jan/12/microsoft-confirms-UEFI-fears-locks-down-ARM/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:69:"Cory Doctorow at 28c3: The Coming War on General Purpose Computation
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"http://www.softwarefreedom.org/blog/2012/jan/04/doctorow-ccc-keynote/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2764:"<p><i>Blog post by <strong>Aaron Williamson</strong>.  Please email any comments on this entry to <a href="mailto:aaronw@softwarefreedom.org">&lt;aaronw@softwarefreedom.org&gt;</a>.</i></p>
<p>In his <a href="http://boingboing.net/2011/12/27/the-coming-war-on-general-purp.html">keynote</a> from the <a href="http://events.ccc.de/category/28c3/">28th Chaos Communication Congress</a> last week, Cory Doctorow outlines the primary threat to software freedom in the 21st century: that as our lives become more dependent upon general-purpose computers, the attempts of industry and government to control computing will fundamentally endanger our personal liberty. Using the now-familiar history of digital rights management&mdash;its rise, its failure, and legislative efforts to enforce it&mdash;Cory illustrates how those threatened by technology will inevitably seek to cripple it. But the so-called copyright wars waged by content owners, he says, were only "a skirmish":</p>

<blockquote>The problem is twofold: first, there is no known general-purpose computer that can execute all the programs we can think of except the naughty ones; second, general-purpose computers have replaced every other device in our world. There are no airplanes, only computers that fly. There are no cars, only computers we sit in. There are no hearing aids, only computers we put in our ears. There are no 3D printers, only computers that drive peripherals. There are no radios, only computers with fast ADCs and DACs and phased-array antennas. Consequently anything you do to "secure" anything with a computer in it ends up undermining the capabilities and security of every other corner of modern human society.</blockquote>

<p>This problem has been at the center of SFLC's recent work. It's the reason we've <a href="http://www.softwarefreedom.org/resources/2010/transparent-medical-devices.html">fought for disclosure</a> of the software running implantable medical devices and are <a href="http://softwarefreedom.org/news/2011/dec/02/proposed-dmca-exemption/">asking the Copyright Office</a> to limit the DMCA's anti-circumvention provisions to ensure that people can install whatever software they choose on their personal computing devices.Thanks to Cory for his clear and accessible explanation of the threat to free computing and for his call (at 36:00) to <a href="http://softwarefreedom.org/donate/">support SFLC's efforts</a> to fight restrictive implementations of UEFI.</p>

<p>You can download a high-resolution copy of the entire speech <a href="http://mirror.fem-net.de/CCC/28C3/mp4-h264-HQ/28c3-4848-en-the_coming_war_on_general_computation_h264.mp4">here</a> or watch it on <a href="http://www.youtube.com/watch?v=HUEvRyemKSg">YouTube</a> (Flash required).</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:45:"aaronw@softwarefreedom.org (Aaron Williamson)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 04 Jan 2012 10:36:00 -0500";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:69:"http://www.softwarefreedom.org/blog/2012/jan/04/doctorow-ccc-keynote/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:28:"SFLC Seeks Interns for 2012
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:76:"http://www.softwarefreedom.org/blog/2011/dec/23/sflc-seeks-interns-for-2012/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1970:"<p><i>Blog post by <strong>Aaron Williamson</strong>.  Please email any comments on this entry to <a href="mailto:aaronw@softwarefreedom.org">&lt;aaronw@softwarefreedom.org&gt;</a>.</i></p>
<p>The Software Freedom Law Center is seeking <a href="http://www.softwarefreedom.org/about/opportunities/internship/">legal, technology, and administrative interns</a> for the summer of 2012.</p>

<p>Legal interns assist SFLC counsel in all areas of our practice,
including copyright and trademark licensing, patent review, and
nonprofit corporate formation and compliance. Typical work includes
legal research and writing, drafting educational materials, and
assisting with registrations and other filing.</p>

<p>Summer internships are full-time and generally last 10 weeks or
longer, although splits may be possible in some cases. All interns
will work from our New York office. Internships are unpaid; students
may seek seek funding from their school's public interest program or
another sponsorship arrangement.</p>

<p>Applicants should have a demonstrated interest in software freedom
and be conversant in legal and technical concepts related to free and
open source software. Familiarity with at least one programming
language and with general software development practices is preferred,
as is course work or practical experience with copyrights, patents,
trademarks, or nonprofit law.</p>

<p>Law students of all levels will be considered. Law school graduates
seeking placement for funded public interest fellowships are
encouraged to apply. To apply, please send a resume, cover letter, transcript, and
writing sample, in a free and open format, to
<a href="mailto:internships@softwarefreedom.org">internships@softwarefreedom.org</a> before February 15, 2012.</p>

<p>Technology and administrative internships are also available. For more information please visit our <a href="http://www.softwarefreedom.org/about/opportunities/internship/">Internships page</a>.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:45:"aaronw@softwarefreedom.org (Aaron Williamson)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 23 Dec 2011 12:32:00 -0500";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:76:"http://www.softwarefreedom.org/blog/2011/dec/23/sflc-seeks-interns-for-2012/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"Accounting at SFLC
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"http://www.softwarefreedom.org/blog/2011/sep/07/accounting-at-sflc/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1627:"<p><i>Blog post by <strong>Clint Adams</strong>.  Please email any comments on this entry to <a href="mailto:clint@softwarefreedom.org">&lt;clint@softwarefreedom.org&gt;</a>.</i></p>
<p>At the Software Freedom Law Center, we do our internal accounting with free software. We had been using John Wiegley's <a href="http://www.ledger-cli.org/">Ledger</a> for quite some time, and now we are also using Simon Michael's <a href="http://hledger.org/">hledger</a>.</p>
<p>We log most of our transactions either through manual entry in hledger-web (the hledger web interface) or import from .csv files via <code>hledger convert</code>. hledger can read comma-separated values from a file you might retrieve from a financial institution, and outputs entries in ledger format according to a set of rules that you specify. In some cases the data quality is poor enough that we do some preprocessing before feeding it to hledger.</p>
<p>Since we have no need for a large database-backed ERP system, we can take advantage of the benefits of the plain-text ledger format, and view reports from ledger, hledger, and hledger-web. We also plan to automate the generation of spreadsheets from the ledger entries.</p>
<p>There are some features we would like to see in or accompanying hledger-web: interactive CSV conversion, a VCS backend (through Data.FileStore), per-transaction atomic edits, tracking of which user made which changes, and the ability to intelligently deduplicate transactions.</p>
<p>If you know Haskell and would like to help us out, please take a look at this <a href="http://hledger.org/DEVELOPMENT.html">guide</a>.</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:39:"clint@softwarefreedom.org (Clint Adams)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 07 Sep 2011 16:04:00 -0400";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:67:"http://www.softwarefreedom.org/blog/2011/sep/07/accounting-at-sflc/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:54:"OSCON 2011: Legal Basics for Developers talk; wrap-up
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:66:"http://www.softwarefreedom.org/blog/2011/aug/16/oscon-2011-wrapup/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3536:"<p><i>Blog post by <strong>Aaron Williamson</strong>.  Please email any comments on this entry to <a href="mailto:aaronw@softwarefreedom.org">&lt;aaronw@softwarefreedom.org&gt;</a>.</i></p>
<p><a href="http://www.oscon.com/">OSCON</a> is probably the single largest annual gathering of free software developers in the world, so it's always a good opportunity for SFLC to catch up with the projects we work with and to make new friends in the community. I only got to spend two days at OSCON 2011, but in that time I met and talked shop (and microbrews and vegan donuts) with lots of folks who are making impressive contributions to free software. I also got to talk about <a href="http://softwarefreedom.org/events/2011/oscon-legal-basics/">Legal Basics for Developers</a> with <a href="http://blogs.gnome.org/gnomg/">Karen Sandler</a> to a fantastic and engaged audience.</p>

<p>The audio and slides from our talk are available in <a href="http://softwarefreedom.org/podcast/2011/aug/16/Episode-0x16-Legal-Basics-for-Developers/">this week's episode</a> of <a href="http://faif.us/">Free as in Freedom</a>, Karen's biweekly oggcast with <a href="http://ebb.org/bkuhn/">Bradley Kuhn</a> of the <a href="http://sfconservancy.org/">Software Freedom Conservancy</a>. While we didn't get through nearly all of the topics on the slides, we talked about fundamental trademark, copyright, and corporate issues that all free software developers should be aware of. We also answered some excellent and challenging questions from the audience; we didn't have the foresight to repeat those questions, so they're not audible on the recording, but even so our answers should be understandable and informative.</p>

<p>It was a busy week for my co-presenter Karen: she was given an <a href="http://blogs.gnome.org/gnomg/2011/07/31/oscon-report-part-1/">Open Source Award</a> for her excellent work at SFLC and the <a href="http://gnome.org/">GNOME Foundation</a> and she gave an superb <a href="http://blogs.gnome.org/gnomg/2011/08/02/oscon-report-part-2/">keynote speech</a> about her <a href="http://www.softwarefreedom.org/resources/2010/transparent-medical-devices.html">advocacy work related to medical devices software</a>, <a href="http://gnome3.org/">GNOME 3</a>, and the importance of software user freedom. Karen has been a great colleague and mentor to me at SFLC and I'm thrilled to see her work recognized.</p>

<p>In addition to my talk with Karen, I had the pleasure of meeting (among many others) <a href="http://mjg59.dreamwidth.org/">Matthew Garrett</a> (Linux power management hacker and GPL activist) and David Mirza and Bruce Leidl of <a href="http://subgraph.com/">Subgraph</a> (a Montreal startup building Vega, a free software website security-testing framework), trading notes with <a href="http://www.haynesandboone.com/Van_Lindberg/">Van Lindberg</a> (a very sharp free software lawyers in private practice), and of course trolling the <a href="https://secure.wikimedia.org/wikipedia/en/wiki/Richard_Fontana">usual</a> <a href="http://ebb.org/bkuhn/">suspects</a>. And I fell deeper in love with <a href="http://www.ifc.com/portlandia/">Portland, OR</a>, where OSCON <a href="http://ostatic.com/blog/oscon-2010-returning-to-portland-after-brief-jaunt-to-san-jose">returned in 2010</a> after O'Reilly was duly reprimanded for holding OSCON 2009 in dull San Jose.</p>

<p>Thanks to everyone who came to the talk and to O'Reilly for accepting our talk and hosting a great event! I'm already looking forward to next year.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:45:"aaronw@softwarefreedom.org (Aaron Williamson)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 16 Aug 2011 14:17:00 -0400";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:66:"http://www.softwarefreedom.org/blog/2011/aug/16/oscon-2011-wrapup/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:70:"Office 365: The New Microsoft "Cloud" Likely Comes with Spying Inside
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"http://www.softwarefreedom.org/blog/2011/jun/29/Office-365/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3213:"<p><i>Blog post by <strong>Software Freedom Law Center</strong>.  Please email any comments on this entry to <a href="mailto:sflc@softwarefreedom.org">&lt;sflc@softwarefreedom.org&gt;</a>.</i></p>
<div id="office-365:-the-new-microsoft-cloud-likely-comes-with-spying-inside"
><p
  >Microsoft's much hyped &quot;cloud&quot;-based replacement to its <a href="http://www.nytimes.com/2011/06/28/technology/business-computing/28soft.html"
    >$20 billion-per-year</a
    > Microsoft Office business comes with new features such as <a href="http://www.microsoft.com/en-us/office365/plans/small-business/im-online-meetings.aspx"
    >real-time multi-user collaborative editing, instant messaging, video conference, online meetings and more.</a
    > What Microsoft does not tell you in their press release is that when you, your business, or your friends sign up, you may be getting an unadvertised feature as well: free spying.</p
  ><p
  >A <a href="http://appft1.uspto.gov/netacgi/nph-Parser?Sect1=PTO2&amp;Sect2=HITOFF&amp;p=1&amp;u=%2Fnetahtml%2FPTO%2Fsearch-adv.html&amp;r=1&amp;f=G&amp;l=50&amp;d=PG01&amp;S1=20110153809&amp;OS=20110153809&amp;RS=20110153809"
    >patent application</a
    > published by the USPTO last Thursday reveals that Microsoft has been researching, since before December 2009, how to redirect VoIP calls to intercept devices and law enforcement agents. The method disclosed by the patent application is devious—subverting routing protocols so that packets sent by any person tagged by a monitoring request will be routed through a recording agent. The application discloses &quot;gaming systems, instant messaging protocols that transmit audio, Skype and Skype-like applications, meeting software, video conferencing software, and the like&quot; as technologies that can use this method. In other words, Microsoft has reason to believe that their interception method can be applied to the newly acquired Skype (<a href="http://blogs.skype.com/en/2011/06/skype_is_in_da_house.html"
    >recently deployed in Congress</a
    >), Xbox 360, and the video conferencing features in Office 365.</p
  ><p
  >The publication of this patent application coupled with the announcement of Microsoft's new service highlights the need for adoption of free and open source software solutions. When the same companies making the tools that we need to remain connected are researching ways to spy on their customers, why should we trust them and why shouldn't we look for something better? At SFLC we use an <a href="http://www.asterisk.org/"
    >Asterisk</a
    > server and the <a href="http://mfnboer.home.xs4all.nl/twinkle/index.html"
    >Twinkle</a
    > softphone to provide free, encrypted voice communication anywhere any of us has a network connection. Our free software system provides communications security and saves us money. Every small business as well as every large one stands to gain by using VoIP, but no business gains by losing its privacy. Microsoft is offering &quot;unified communications&quot; with unified one-stop spying likely built in. Free software will work for <em
    >your</em
    > business, not for people who think your business is their business.</p
  ></div
>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:54:"sflc@softwarefreedom.org (Software Freedom Law Center)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 29 Jun 2011 10:42:00 -0400";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:59:"http://www.softwarefreedom.org/blog/2011/jun/29/Office-365/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:32:"A New Design for SFLC's Website
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"http://www.softwarefreedom.org/blog/2011/apr/18/new-design/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1970:"<p><i>Blog post by <strong>Aaron Williamson</strong>.  Please email any comments on this entry to <a href="mailto:aaronw@softwarefreedom.org">&lt;aaronw@softwarefreedom.org&gt;</a>.</i></p>
<p>SFLC is introducing
our <a href="http://www.softwarefreedom.org/">redesigned website</a>
today! We hope you like the new look. While the content is largely
unaffected, we've made some improvements to the information design to
make the content easier to access and understand. (Take a look at our
new <a href="http://www.softwarefreedom.org/resources/">publications</a>
page for an example.) We also changed our default content license to
Creative
Commons <a href="http://creativecommons.org/licenses/by-sa/3.0/us/legalcode">Attribution-ShareAlike
3.0</a> (formerly
<a href="http://creativecommons.org/licenses/by-nd/3.0/us/legalcode">Attribution-NoDerivs</a>).</p>

<p>On the backend, we're still using the excellent free web
framework <a href="http://www.djangoproject.com/">Django</a> running
on top of the <a href="http://httpd.apache.org/">Apache HTTP
Server</a>. The new design brings the frontend up to date with
emerging web standards, including HTML5. If you're using a modern,
standards-compliant web browser
(like <a href="http://www.getfirefox.com/">Mozilla Firefox 4</a>), you
might notice this in subtle ways, like in some of
the <a href="http://www.softwarefreedom.org/about/colophon.html#fonts">free
fonts</a> we're using.</p>

<p>We hope this redesign to be the beginning of an evolution, rather than
a one-time change.  We will continue looking for ways to make our
content more useful and more accessible to you.  To do that, we need
your help! Please <a href="mailto:info@softwarefreedom.org">let
us know</a> if you can't find something you're looking for, or if
there's anything you'd like to see on our site that's not there.  And
of course the tires always need kicking&mdash;if you notice anything
broken or any invalid HTML, tell us about that too.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:45:"aaronw@softwarefreedom.org (Aaron Williamson)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 18 Apr 2011 10:27:00 -0400";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:59:"http://www.softwarefreedom.org/blog/2011/apr/18/new-design/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"Google Books Settlement Rejected
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:81:"http://www.softwarefreedom.org/blog/2011/mar/22/Google-Books-Settlement-Rejected/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1552:"<p><i>Blog post by <strong>Karen M. Sandler</strong>.  Please email any comments on this entry to <a href="mailto:karen@softwarefreedom.org">&lt;karen@softwarefreedom.org&gt;</a>.</i></p>
<p>We applaud the rejection by Judge Denny Chin of the Google Books class action settlement with authors and publishers regarding the digitization of books. SFLC <a href="http://www.softwarefreedom.org/news/2009/sep/08/sflc-objects-google-book-settlement/">filed a letter</a> with the court on behalf of the <a href="http://www.fsf.org/">Free Software Foundation</a> and author Karl Fogel, urging the court to reject the settlement as it was last proposed and asking the court to consider the impact of the settlement upon members of the class who have distributed their works under Free licenses.</p>

<p>Judge Chen cited the objections of the class members as a key reason for the rejection. In our own objection, we pointed out that the settlement's attempt to balance commercial interests in publication allowed freely licensed books to be distributed without regard for their terms, undermining the community’s unifying values - a harm which could not be addressed a royalty arrangement.  We further pointed out that the settlement in essence would replaced the United States Congress as the entity responsible for devising copyright law.  As Judge Chin writes in his opinion today, "the matter is best left for Congress."</p>

<p>SFLC is pleased to provide a legal voice to clients like the FSF to defend software freedom and Free licenses generally. </p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:44:"karen@softwarefreedom.org (Karen M. Sandler)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 22 Mar 2011 18:53:00 -0400";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:81:"http://www.softwarefreedom.org/blog/2011/mar/22/Google-Books-Settlement-Rejected/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:35:"stet repository moved to gitorious
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:80:"http://www.softwarefreedom.org/blog/2011/jan/06/stet-repository-moved-gitorious/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:749:"<p><i>Blog post by <strong>Clint Adams</strong>.  Please email any comments on this entry to <a href="mailto:clint@softwarefreedom.org">&lt;clint@softwarefreedom.org&gt;</a>.</i></p>
<p>
stet, the first program known to be released under the GNU Affero General Public License, has been moved to a <a href="http://gitorious.org/stet">git repository</a> on Gitorious for historical archival purposes.
</p>

<p>stet is a free software package for gathering comments about a text document via a webpage.  It was designed by the <a href="http://www.softwarefreedom.org">Software Freedom Law Center</a> for the <a href="http://www.fsf.org/">Free Software Foundation</a> to use as part of drafting process of the GNU General Public License version 3.
</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:39:"clint@softwarefreedom.org (Clint Adams)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 06 Jan 2011 17:09:00 -0500";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:80:"http://www.softwarefreedom.org/blog/2011/jan/06/stet-repository-moved-gitorious/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:2:{s:4:"href";s:42:"http://www.softwarefreedom.org/feeds/blog/";s:3:"rel";s:4:"self";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";a:11:{s:6:"server";s:12:"nginx/0.7.67";s:4:"date";s:29:"Wed, 22 Aug 2012 23:37:31 GMT";s:12:"content-type";s:19:"application/rss+xml";s:17:"transfer-encoding";s:7:"chunked";s:10:"connection";s:10:"keep-alive";s:7:"expires";s:29:"Wed, 22 Aug 2012 23:47:31 GMT";s:4:"vary";s:22:"Cookie,Accept-Encoding";s:13:"last-modified";s:29:"Wed, 22 Aug 2012 23:37:31 GMT";s:4:"etag";s:32:"44ee4ef9638363e4cf78ae94a651a7b0";s:13:"cache-control";s:11:"max-age=600";s:16:"content-encoding";s:4:"gzip";}s:5:"build";s:14:"20090627192103";}